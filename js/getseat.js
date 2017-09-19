var seat;
	function getseat(lable)
	{
		switch (true)
		{
			case lable<14:
				seat="1_" + (27-2*lable);
				break;
			case lable<27:
				seat="1_" + (2*lable-26);
				break;
			
			case lable<42:
				seat="2_" + (83-2*lable);
				break;
			case lable<56:
				seat="2_" + (2*lable-82);
				break;
			
			case lable<71:
				seat="3_" + (141-2*lable);
				break;
			case lable<86:
				seat="3_" + (2*lable-140);
				break;
			
			case lable<101:
				seat="4_" + (201-2*lable);
				break;
			case lable<115:
				seat="4_" + (2*lable-200);
				break;
			
			case lable<130:
				seat="5_" + (259-2*lable);
				break;
			case lable<144:
				seat="5_" + (2*lable-258);
				break;
			
			case lable<161:
				seat="6_" + (321-2*lable);
				break;
			case lable<177:
				seat="6_" + (2*lable-320);
				break;
			
			case lable<193:
				seat="7_" + (385-2*lable);
				break;
			case lable<209:
				seat="7_" + (2*lable-384);
				break;
			
			case lable<226:
				seat="8_" + (451-2*lable);
				break;
			case lable<242:
				seat="8_" + (2*lable-450);
				break;
			
			case lable<260:
				seat="9_" + (519-2*lable);
				break;
			case lable<276:
				seat="9_" + (2*lable-518);
				break;
			
			case lable<294:
				seat="10_" + (587-2*lable);
				break;
			case lable<311:
				seat="10_" + (2*lable-586);
				break;
			
			case lable<329:
				seat="11_" + (657-2*lable);
				break;
			case lable<345:
				seat="11_" + (2*lable-656);
				break;
			
			case lable<364:
				seat="12_" + (727-2*lable);
				break;
			case lable<382:
				seat="12_" + (2*lable-726);
				break;
			
			case lable<401:
				seat="13_" + (801-2*lable);
				break;
			case lable<418:
				seat="13_" + (2*lable-800);
				break;
			
			case lable<437:
				seat="14_" + (873-2*lable);
				break;
			case lable<455:
				seat="14_" + (2*lable-872);
				break;
			
			case lable<468:
				seat="15_" + (935-2*lable);
				break;
			case lable<480:
				seat="15_" + (2*lable-934);
				break;
			
			case lable<493:
				seat="16_" + (985-2*lable);
				break;
			case lable<505:
				seat="16_" + (2*lable-984);
				break;
			
			case lable<518:
				seat="17_" + (1035-2*lable);
				break;
			case lable<530:
				seat="17_" + (2*lable-1034);
				break;
			
			case lable<543:
				seat="18_" + (1085-2*lable);
				break;
			case lable<555:
				seat="18_" + (2*lable-1084);
				break;
			
			case lable<568:
				seat="19_" + (1135-2*lable);
				break;
			case lable<580:
				seat="19_" + (2*lable-1134);
				break;
			
			case lable<593:
				seat="20_" + (1185-2*lable);
				break;
			case lable<605:
				seat="20_" + (2*lable-1184);
				break;
			
			case lable<618:
				seat="21_" + (1235-2*lable);
				break;
			case lable<630:
				seat="21_" + (2*lable-1234);
				break;
			
			case lable<643:
				seat="22_" + (1285-2*lable);
				break;
			case lable<655:
				seat="22_" + (2*lable-1284);
				break;
			
			case lable<668:
				seat="23_" + (1335-2*lable);
				break;
			case lable<680:
				seat="23_" + (2*lable-1334);
				break;
			
			case lable<693:
				seat="24_" + (1385-2*lable);
				break;
			case lable<705:
				seat="24_" + (2*lable-1384);
				break;
			
			case lable<725:
				seat="25_" + (1449-2*lable);
				break;
			case lable<744:
				seat="25_" + (2*lable-1448);
				break;
			
			case lable<764:
				seat="26_" + (1527-2*lable);
				break;
			case lable<783:
				seat="26_" + (2*lable-1526);
				break;
			
			case lable<803:
				seat="27_" + (1605-2*lable);
				break;
			case lable<822:
				seat="27_" + (2*lable-1604);
				break;
			
			case lable<842:
				seat="28_" + (1683-2*lable);
				break;
			case lable<861:
				seat="28_" + (2*lable-1682);
				break;
			
			case lable<881:
				seat="29_" + (1761-2*lable);
				break;
			default:
				seat="28_" + (2*lable-1760);
				break;
			
		}
		return seat;
	}