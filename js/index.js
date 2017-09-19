var windVal = 0,
    blowVal = 0,
    cycle = 80,
    cycleAmt = 0.03;

var container = document.querySelectorAll('.container')[0];
    container.style.width = window.innerWidth + 'px';
    container.style.height = 528 + 'px';

var Segment = function (settings) {
    settings = settings || {};
    this.angle = settings.angle || 0;
    this.cycle = settings.cycle;
    
    this.x = settings.x || 0;
    this.y = settings.y || 0;
 
    
    this.element = document.createElement('span');
    this.element.classList.add('letter');
    this.element.textContent = settings.letter;
    this.element.style.color = colorCycle(this.cycle);
    container.appendChild(this.element);
    
    this.width = parseInt(window.getComputedStyle(this.element,null).getPropertyValue('width'), 10) + 5;
    this.height = parseInt(window.getComputedStyle(this.element,null).getPropertyValue('height'),10);
}

Segment.prototype.getJoint = function () {
    var x = this.x + Math.cos(this.angle) * this.width,
        y = this.y + Math.sin(this.angle) * this.width;
    return {
        x: x,
        y: y
    };
};

Segment.prototype.render = function (el) {
    el.style.left = this.x +'px';
    el.style.top = this.y + 'px';
    el.style.webkitTransform = "rotate(" + this.angle + "deg)";
    //this.element.style.color = colorCycle(this.cycle++);
};

var WordString = function (settings) {
    settings = settings || {};
    this.x = settings.x || 0;
    this.y = settings.y || 0;
    this.target = {x : 0, y : 0},
    this.text = settings.text.split('');
    this.text.reverse().join('');
    
    this.segNum = settings.text.length;
    this.angle = (Math.random() * 360 - 180) * Math.PI / 180;
    this.segments = [];

    for (var s = 0; s < this.segNum-1; s++) {
        this.segments.push(new Segment({
            letter: this.text[s],
            angle: (Math.random() * 360 - 180) * Math.PI / 180,
            cycle : cycle+=cycleAmt
        }));
    }
    
    this.segments.push(new Segment({
        x: this.x,
        y: this.y,
        angle: this.angle,
        letter: this.text[this.segNum-1],
        cycle : cycle+=cycleAmt
    }));
}

WordString.prototype.track = function (segment, x, y) {    
    var dx = x - segment.x,
        dy = y - segment.y;
    
    segment.angle = Math.atan2(dy, dx);

    var w = segment.getJoint().x - segment.x,
        h = segment.getJoint().y - segment.y;

    return {
          x: x - w,
          y: y - h
    };
}

WordString.prototype.position = function(segmentA, segmentB){
    segmentA.x = segmentB.getJoint().x;
    segmentA.y = segmentB.getJoint().y;
};

WordString.prototype.update = function () {
    var curX = this.segments[this.segments.length-1].x + windVal,
        reachTarget = { x : curX, y : window.innerHeight+500};

    this.target = this.track(this.segments[0], reachTarget.x, reachTarget.y);
    var track = this.track,
        target = this.target,
        position = this.position;
    
    this.segments.forEach(function (e, i, seg) {
        if (i !== 0) {
            target = track(e, target.x, target.y);
            position(seg[i - 1], seg[i]);
        }
    });
};

WordString.prototype.render = function () {
    this.segments.forEach(function (e) {
        e.render(e.element);
    });
};

WordString.prototype.destroy = function(){
    this.segments.forEach(function (e, i, arr) {
        e.element.remove();
    });
}

var wordChains = [],
    chainCount = 20;





for(var w = 0; w < chainCount; w++){
	var word=["一个是因赌博输尽钱财，挪用公款，被所有人抛弃的自杀者","一个是失去工作，穷困潦倒，在生活压力下一怒持枪抢劫的犯罪人",
	"当一心求活的劫匪绑架了一心求死的人质","怎样生，怎样死，都变得困难重重","我们眼前的是真相还是谎言","",
	
	"三个人七颗雷确实有点浪费","一个美国狙击手，一个越南民兵，一个法国战地记者","当地雷即将带走他们的生命，面对记者的镜头他们又会道出怎样的心声？","回家？战火纷飞哪里有家？","",
	
	"有人借由剧组只为了追妹子;有人三分钟热度完就中途退出","有人面临考试压力时间冲突要做出抉择;有人以为话剧是无用功萌生退意","导演满怀期待想尽心排戏，周围的一切像在对他说你该放弃",
	" 没有了路，我还想一心走下去。 没有了路，求你们陪我走下！","",
	
	"三十多年前","一段爱情,不仅夺走了她的孩子，也带走了她对这个世界的美好幻想","三十多年后","与初恋情人再次相遇，旧时的恩怨，会如何收场？"];
    wordChains.push(new WordString({
        text: word[w],
        x : (window.innerWidth/chainCount) * w+30,
        y : 0
    }));
}

function update(){
    for(var w = 0; w < chainCount; w++){
        wordChains[w].update();
        wordChains[w].render();
    }
    windVal=Math.sin(blowVal)*75;
    blowVal+=0.1;
    requestAnimationFrame(update);
}

update();




function colorCycle(cycle, bright, light) {
    bright = bright || 255;
    light = light || 0;
    cycle *= .1;
    var r = ~~ (Math.sin(.3 * cycle + 0) * bright + light),
        g = ~~ (Math.sin(.3 * cycle + 2) * bright + light),
        b = ~~ (Math.sin(.3 * cycle + 4) * bright + light);

    return 'rgb(' + Math.min(r, 15) + ',' + Math.min(g, 25) + ',' + Math.min(b,25) + ')';
}
