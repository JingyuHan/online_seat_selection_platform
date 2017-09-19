var seat;
	function getseat(lable)
	{
		switch (true){case lable<22:seat="1_" + (43-2*lable);break;case lable<43:seat="1_" + (2*lable-42);break;case lable<65:seat="2_" + (129-2*lable);break;case lable<87:seat="2_" + (2*lable-128);break;
			case lable<110:seat="3_" + (219-2*lable);break;case lable<133:seat="3_" + (2*lable-218);break;case lable<157:seat="4_" + (313-2*lable);break;case lable<181:seat="4_" + (2*lable-312);break;
			case lable<205:seat="5_" + (409-2*lable);break;case lable<229:seat="5_" + (2*lable-408);break;case lable<254:seat="6_" + (507-2*lable);break;case lable<279:seat="6_" + (2*lable-506);break;
			case lable<305:seat="7_" + (609-2*lable);break;case lable<331:seat="7_" + (2*lable-608);break;case lable<358:seat="8_" + (715-2*lable);break;case lable<385:seat="8_" + (2*lable-714);break;
			case lable<412:seat="9_" + (823-2*lable);break;case lable<439:seat="9_" + (2*lable-822);break;case lable<466:seat="10_" + (931-2*lable);break;case lable<493:seat="10_" + (2*lable-930);break;
			case lable<520:seat="11_" + (1039-2*lable);break;case lable<547:seat="11_" + (2*lable-1038);break;case lable<574:seat="12_" + (1147-2*lable);break;case lable<601:seat="12_" + (2*lable-1146);break;
			case lable<628:seat="13_" + (1255-2*lable);break;case lable<655:seat="13_" + (2*lable-1254);break;case lable<681:seat="14_" + (1361-2*lable);break;default:seat="14_" + (2*lable-1360);
		}
		return seat;
	}