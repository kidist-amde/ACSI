

CREATE TABLE `about` (
  `inf_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(3) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`inf_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO about VALUES("42","2017-06-20","The ACSI started operations in 1995 as a department of a local NGO, the ORDA, and has grown to become one of the largest MFI in Ethiopia. It established for the aiming to feel the gap of formal institutions to meet the need of small-scale borrowers in income generation schemes. It was licensed by the National Bank of Ethiopia as a micro finance intermediary share company in April 1997.      ","1");
INSERT INTO about VALUES("43","2017-06-20","ACSI aspires to see a society in which people are free from the rules of hopeless poverty, with all the power determining their future in their own hands is its vital vision.","1");
INSERT INTO about VALUES("44","2017-06-20","Given the level of poverty in the region, ACSI’s primary mission is to improve the economic situation of low income, productive poor people in the Amhara region primarily through increased access to lending and saving services. It will maintain cost effectiveness in service delivery, and integrate its activities with government and NGOs working towards achieving food security and poverty alleviation in the region.","1");
INSERT INTO about VALUES("41","2017-06-20","የብድር ማጽደቅ ስርዓት
ተቋሙ የብድር አገልግሎት በግል በቡድንና በማህበር ማለትም በሽርክናና በህብረት ሥራ ማህበራት ተደራጅተው ለሚቀርቡ ሰዎች ይሰጣል፡፡ በዚህም መሠረት የማፅደቅ ስርአቱ
ከብር 700.00 እስከ 50,000.00
ከብር 50000.00 በታች ያሉ የብድር ጥያቄዎች በሙሉ በአገልግሎት መስጫ ጣቢያ ደረጃ ሊወሰኑ ይችላሉ፡፡
ከብር 50,001.00 - 10ዐ,ዐዐዐ.00
ከብር 50001 እስከ ብር 100000.00 ድረስ ላሉ የብድር ጥያቄዎች መነሻው አገልግሎት መስጫ ጣቢያው ሆኖ ውሳኔ በቅ/ፅ/ቤት ደረጃ እንዲሰጥ ይደረጋል፡፡
ከብር 100,001.00 እስከ  ብር  200,000.00","2");
INSERT INTO about VALUES("38","2017-06-20","የደንበኞች ምዝገባ (Registration)","2");
INSERT INTO about VALUES("39","2017-06-20","የአገልግሎት ተጠቃሚዎች ምዝገባ የሚከናወንበት
ማንኛውም የተቋሙን አገልግሎት የሚፈልግ ግለሰብ ቡድን/ማህበር ወይም ድርጅት የአገልግሎት ጥያቄውን የሚያቀርበው በሚኖርበት የቀበሌ የአገልግሎት መስጫ ጣቢያ ነው፡፡ ሆኖም ግለሰቡ ወይም ቡድኑ የሚሠራበት አካባቢ የተለየ ቀበሌ በሆነ ጊዜ ነዋሪ ከሆነበት ቀበሌ የነዋሪነትና ብድር አለመውሰዱን የሚያረጋግጥ መረጃ በማግኘት ወደሚሰራበት ቀበሌ እንዲተላለፍ ማድረግ ያስፈልጋል፡፡ በሌላም በኩል ደንበኞች ዋናው መስሪያ ቤታቸው ከመኖሪያ ቤታቸው የተለየ በሆነ ጊዜ የብድር አገልግሎት ማግኘት የሚችሉት በሚሰሩበት ቦታ ወይም ፈቃድ ያገኙበት ክ/ከተማ ወይም ቀበሌ መሆን ይገባዋል፡፡","2");
INSERT INTO about VALUES("48","2017-06-20","- በአገልግሎት መስጫ ጣቢያ፣ የብድርና ቁጠባ ባለሙያና የአገልግሎት ሃላፊ የነዋሪነት፣ የዕዳ ማጣሪያ፣ የስራ ቦታ፣የቢዝነሱ ህጋዊነት፣የዋስትና ሁኔታ፣የደንበኛውን ጥራትና የኋላ ታሪክ የሚገልጽ መረጃ በማጣራትና ስለቢዝነሱ ተገቢውን አስተያየት በመስጠት ለቅ/ፅ/ቤት ያስተላልፋሉ፡፡
- የቅ/ጽ/ቤት ሥራ አስኪያጅ፣ የብድርና ቁጠባ ባለሙያና የስራውን አዋጪነት በዝርዝር ከገመገመ በኋላ የውሳኔ ሃሳቡን በማካተት ለመምሪያ ሃላፊ በማቅረብ በምክትል ዋና ስራ አስኪያጅ ሰብሳቢነት በኮሚቴ ያፀድቃል፡፡","2");





CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(200) NOT NULL,
  `address` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descrption` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO contact_us VALUES("1","","Location","Gondar,Ethiopia","on");
INSERT INTO contact_us VALUES("2","","Tel","+251582205338/+251582201653","on");
INSERT INTO contact_us VALUES("3","","Fax","+251582201733","on");
INSERT INTO contact_us VALUES("4","","E-mai","acsi@ethionet.et","on");
INSERT INTO contact_us VALUES("5","","Website","http://www.acsi.org.et/","on");
INSERT INTO contact_us VALUES("7","","ስልክ ቁጥር","+251582205338/+251582201653","off");
INSERT INTO contact_us VALUES("8","","ፋክስ","+251582201733","off");
INSERT INTO contact_us VALUES("10","","ኢሜል","acsi@ethionet.et","off");
INSERT INTO contact_us VALUES("11","","ድህረ ገጽ","http://www.acsi.org.et/","off");
INSERT INTO contact_us VALUES("12","","አድራሻ","ሰ/ጎንደር ቅርንጫፍ","off");





CREATE TABLE `credit` (
  `crd_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Amount` double NOT NULL,
  `percent` float NOT NULL,
  `date` date NOT NULL,
  `interest_update` date NOT NULL,
  `DueDate` date NOT NULL,
  `penality` double NOT NULL,
  PRIMARY KEY (`crd_no`),
  UNIQUE KEY `AccNumber_2` (`AccNumber`),
  KEY `AccNumber` (`AccNumber`),
  CONSTRAINT `credit_ibfk_3` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO credit VALUES("53","adiss","nebret","2306","1130","0.13","2017-06-22","2017-06-22","2017-07-22","0");
INSERT INTO credit VALUES("54","yared","eshetu","2309","5900","0.18","2017-06-22","2017-07-24","2017-07-22","40");





CREATE TABLE `creditrequest` (
  `creq_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Date` date NOT NULL,
  `Amount` double NOT NULL,
  `Guarantee` varchar(22) NOT NULL,
  `CreditType` varchar(22) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`creq_no`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO creditrequest VALUES("39","adiss","nebret","2306","2017-06-22","1000","perol","0.13","Done");





CREATE TABLE `custappointment` (
  `AccNumber` int(22) NOT NULL,
  `AppoDate` date NOT NULL,
  `AppoReason` text NOT NULL,
  KEY `AccNumber` (`AccNumber`),
  CONSTRAINT `custappointment_ibfk_1` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO custappointment VALUES("2303","2017-06-22","u can come tommorow");
INSERT INTO custappointment VALUES("2306","2017-06-22","addis u can take your
credit");
INSERT INTO custappointment VALUES("2303","2017-06-22","Dear Customer You Can Came And collect Your money!!tnx for choosing us!!!");





CREATE TABLE `customer` (
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `UserName` varchar(22) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_id` int(22) NOT NULL,
  `AccNumber` int(12) NOT NULL AUTO_INCREMENT,
  `Sex` varchar(9) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(55) NOT NULL,
  `Guarantee` varchar(55) NOT NULL,
  `AccType` varchar(22) NOT NULL,
  `pnumber` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`AccNumber`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2311 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("hana","haysh","hani","MTIzNA==","2222","2303","F","22","AA","","saving","922564325","2017-06-22","on");
INSERT INTO customer VALUES("samrawit","getu","samri","MTIzNA==","55555","2304","F","23","db","plan","credit","937674878","2017-06-22","on");
INSERT INTO customer VALUES("elphaz","abayneh","elphi","MTIzNA==","1020","2305","F","23","db","","saving","922564325","2017-06-22","on");
INSERT INTO customer VALUES("adiss","nebret","adiss","MTIzNA==","1112","2306","F","23","bure","perol","credit","909256541","2017-06-22","on");
INSERT INTO customer VALUES("wudnesh","balew","wude","MTIzNA==","1213","2307","F","23","gojam","","saving","945300792","2017-06-22","on");
INSERT INTO customer VALUES("yosef","argaw","yosi","MTIzNA==","1314","2308","M","25","hawasa","librey","credit","910653838","2017-06-22","on");
INSERT INTO customer VALUES("yared","eshetu","yaredo","MTIzNA==","2569","2309","M","23","AA","plan","credit","926353269","2017-06-22","on");
INSERT INTO customer VALUES("kalhiwot","tadese","kal","MTIzNA==","5695","2310","F","33","gojam","perol","credit","923003625","2017-06-22","on");





CREATE TABLE `employee` (
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `userName` varchar(22) NOT NULL,
  `WorkType` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staff_id` int(12) NOT NULL AUTO_INCREMENT,
  `Sex` varchar(9) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(55) NOT NULL,
  `pnumber` int(15) NOT NULL,
  `qualification` varchar(22) NOT NULL,
  `status` varchar(3) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2302 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("tazeb","kassa","tazeb","admin","MTIzNA==","2263","M","23","Gojam","922564996","BSC","on","2017-06-19");
INSERT INTO employee VALUES("seranesh","yeshineh","sera","officer","MTIzNA==","2278","F","22","Gondar","956789876","bcs","on","2017-06-19");
INSERT INTO employee VALUES("mekdes","alemu","mekdi","csp","MTIzNDU=","2292","F","22","AA","910324354","bsc","on","2017-06-20");
INSERT INTO employee VALUES("kidist","amde","haki","cashir","MTIzNA==","2293","F","21","aa","922564996","phd","on","2017-06-20");
INSERT INTO employee VALUES("amde","mekonnen","amde","admin","MTIzNA==","2294","M","53","DB","911490850","bcs","on","2017-06-21");
INSERT INTO employee VALUES("selam","amde","selam","officer","MTIzNA==","2295","F","25","AA","923040086","phd","off","0000-00-00");
INSERT INTO employee VALUES("meseret","abebe","mesi","cashir","MTIzNA==","2296","F","66","gonder","922564996","bcs","off","2017-06-21");
INSERT INTO employee VALUES("gediyon","semneh","gedi","admin","MTIzNA==","2297","M","24","aa","32658974","phd","off","2017-06-21");
INSERT INTO employee VALUES("genet","amde","4484","csp","MTIzNA==","2299","F","29","db","911490850","ms","on","2017-06-22");
INSERT INTO employee VALUES("belte","kassa","bele","admin","MTIzNA==","2300","M","23","gondar","912345687","phd","off","2017-06-22");
INSERT INTO employee VALUES("biniam","kassa","bini","admin","MTIzNA==","2301","M","23","gondaar","922564996","diploma","on","2017-06-22");





CREATE TABLE `feedback` (
  `f_id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(12) NOT NULL,
  `email` varchar(22) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO feedback VALUES("7","kidistamde","male","kidist75@gmail.com","ይህ የቁጠባ/ተቀማጭ ዓይነት ከ3 ወር ላላነሰ ጊዜ ተቀማጭ የሚሆንና ከዚሁ ጊዜ በፊት ወጪ የማይደረግ የቁጠባ ዓይነት ነው፡፡ የቁጠባው መጠን፣ወጪ ማድረጊያ ጊዜ፣ የሚከፈል ወለድ በተቋሙና በአስቀማጩ ግለሰብ/ድርጅት ማህበር መካከል በሚደረግ ስምምነት በውል የሚወሰን ነው፡፡");
INSERT INTO feedback VALUES("11","hana","female","hana@gmail.com","i really appreciat the institution customers work!!!!!");





CREATE TABLE `imagec` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `user_id` int(22) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `imagec_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customer` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO imagec VALUES("17","1020","upload/Hydrangeas.jpg");
INSERT INTO imagec VALUES("18","55555","upload/IMG_1321_1.jpg");
INSERT INTO imagec VALUES("20","5695","upload/1477631681297.jpg");
INSERT INTO imagec VALUES("23","2569","upload/204484_147273832006121_5757211_o.jpg");
INSERT INTO imagec VALUES("24","2222","upload/hani.JPG");
INSERT INTO imagec VALUES("25","1112","upload/dagi.jpg");
INSERT INTO imagec VALUES("26","1213","upload/kid0.jpg");
INSERT INTO imagec VALUES("27","1314","upload/Chati.jpg");





CREATE TABLE `information` (
  `AccNumber` int(11) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO information VALUES("2303","dabo","kik","kidist");
INSERT INTO information VALUES("2306","pasta","megbar","kidist");





CREATE TABLE `ledger` (
  `AccNumber` int(22) NOT NULL,
  `Amount` int(255) NOT NULL,
  `TransactionType` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `l_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_no`),
  KEY `AccNumber` (`AccNumber`),
  CONSTRAINT `ledger_ibfk_1` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO ledger VALUES("2303","1000","Withdraw","2017-06-22","35");
INSERT INTO ledger VALUES("2303","1000","Withdraw","2017-06-22","36");
INSERT INTO ledger VALUES("2306","1000","borrow","2017-06-22","37");
INSERT INTO ledger VALUES("2303","150","Withdraw","2017-06-22","38");
INSERT INTO ledger VALUES("2303","300","Saving","2017-06-22","39");
INSERT INTO ledger VALUES("2309","5000","borrow","2017-06-22","40");
INSERT INTO ledger VALUES("2303","500","Saving","2017-06-22","41");
INSERT INTO ledger VALUES("2303","50","Withdraw","2017-06-22","42");
INSERT INTO ledger VALUES("2303","500","Withdraw","2017-06-22","43");
INSERT INTO ledger VALUES("2303","80","Withdraw","2017-06-22","44");
INSERT INTO ledger VALUES("2303","20","Withdraw","2017-06-22","45");
INSERT INTO ledger VALUES("2303","1500","Withdraw","2017-06-22","46");
INSERT INTO ledger VALUES("2303","20","Withdraw","2017-06-22","47");
INSERT INTO ledger VALUES("2303","12","Withdraw","2017-06-22","48");
INSERT INTO ledger VALUES("2303","68","Withdraw","2017-06-22","49");
INSERT INTO ledger VALUES("2303","400","Withdraw","2017-06-22","50");
INSERT INTO ledger VALUES("2303","5000","Saving","2017-06-22","51");
INSERT INTO ledger VALUES("2303","423","Saving","2017-06-22","52");
INSERT INTO ledger VALUES("2303","23","Saving","2017-06-22","53");
INSERT INTO ledger VALUES("2303","200","Saving","2017-06-22","54");
INSERT INTO ledger VALUES("2303","1000","Withdraw","2017-06-22","55");
INSERT INTO ledger VALUES("2307","2000","Saving","2017-06-22","56");
INSERT INTO ledger VALUES("2303","200","Withdraw","2017-06-22","57");





CREATE TABLE `news_tbl` (
  `News_id` int(200) NOT NULL AUTO_INCREMENT,
  `News_Tittle` text NOT NULL,
  `News_Date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`News_id`)
) ENGINE=InnoDB AUTO_INCREMENT=674 DEFAULT CHARSET=latin1;

INSERT INTO news_tbl VALUES("665","breaking news","2017-04-02","ዘመኑ ወደ መጨረሻው እየገሰገሰ ሰይጣንም በዚኽ ዓለም ያለው የገዢነትን ሥልጣል እስከ ወዲያኛው የሚሻርበት ቅዱሳን በእግዚአብሔር መንግሥት እንደ ፀሐይ የሚደምቁበት ጊዜ በደረሰ መጠን፤ መጨረሻው እንደተቃበ የሚረዳው ከእስራቱ የተፈታው ጥንተ ጠላት ሰይጣን ያለ የሌለ የክሕደት፣ የስሕተት፣ የስድብ፣ የምንፍቅና ኀይሉን በምድራችን ላይ እንደሚያመጣ ቅዱስ መጽሐፍ ያስተምረናል፤ በጊዜያችንም በዚኽ የስሕተት መንፈስ የተጓዙ ሰዎች ለሰማይና ለምድር የሚያስጨንቅ ስድብን የእግዚአብሔር ወዳጆችን ሲሳደቡ፣ ክብረ ቅዱሳንን ሲዋጉ ስናይና ስንሰማ ነፍሳችን እጅግ ብትደነግጥም ግን ይኽ የስድብ መንፈስን ጠላት ሰይጣን በምድራችን ላይ በመጨረሻው ዘመን እንደሚያመጣው መጽሐፍ ቅዱስ እንዲኽ ይናገራልና የቃሉን መፈጸም እናስተውላለን፡-??? ?? ????? ?????? ????? ??? ??? ??? ?????? ???? ??? ????? ?????? ???? ???????? ????? ??? ??? ??????? ?? ???? ???? ????? ?????? ????? ????? ????? ??? ??? ???? ?? ??? ?????? ?????? ????? ?????? ???? ?????? ?? ??????? ??? ???? ???????? ??????? ??? ????? ???? ???? ??? ????? ???? ??????? ???? ???????? ????? ????? ??? ????? ??? ???? ???? ????? ??? ??????? ?? ?? ???? ????? ??? ???? ?????? ?? ?????? ??? ???????? ???? ??? ???? ?????? ???? ???? ?????????-","2");
INSERT INTO news_tbl VALUES("666","አገልግሎትን ማስተዋወቅ","2017-06-17","በአፈፃፀም መመሪያው ላይ በተቀመጠው አግባብ የተቋሙ ሰራተኞች እና ባለድርሻ አካላት እንደአግባቡ የተለያዩ መንገዶችን በመጠቀም ስለተቋሙ አገልግሎት ለደንበኛው ግንዛቤ ማስጨበጥ ይኖርባቸዋል::","1");
INSERT INTO news_tbl VALUES("671","Dear Customrs!!!","2017-06-20","Dear Customrs Who Have Saving Account We Add 0.01 persont for your saving account. work with us.Acsi manager Alemu.","2");
INSERT INTO news_tbl VALUES("672","breaking naews","2017-06-22","hhhhh","2");
INSERT INTO news_tbl VALUES("673","breaking naews","2017-06-22","hhhh","2");





CREATE TABLE `rule` (
  `Date` date NOT NULL,
  `Descrption` text NOT NULL,
  `summited_by` varchar(22) NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO rule VALUES("2003-05-17","The main objective of this project is to develop a web based mobile application for patient history taking and pharmacy prescription writing in GCMS and Ibex hospital. This web based mobile application helps the institution and user to exchange and store information in easy way. In addition to that it also has best contribution in minimizing the load and error prone.","kid","on");
INSERT INTO rule VALUES("2008-06-17","ዘመኑ ወደ መጨረሻው እየገሰገሰ ሰይጣንም በዚኽ ዓለም ያለው የገዢነትን ሥልጣል እስከ ወዲያኛው የሚሻርበት ቅዱሳን በእግዚአብሔር መንግሥት እንደ ፀሐይ የሚደምቁበት ጊዜ በደረሰ መጠን፤ መጨረሻው እንደተቃበ የሚረዳው ከእስራቱ የተፈታው ጥንተ ጠላት ሰይጣን ያለ የሌለ የክሕደት፣ የስሕተት፣ የስድብ፣ የምንፍቅና ኀይሉን በምድራችን ላይ እንደሚያመጣ ቅዱስ መጽሐፍ ያስተምረናል፤ በጊዜያችንም በዚኽ የስሕተት መንፈስ የተጓዙ ሰዎች ለሰማይና ለምድር የሚያስጨንቅ ስድብን የእግዚአብሔር ወዳጆችን ሲሳደቡ፣ ክብረ ቅዱሳንን ሲዋጉ ስናይና ስንሰማ ነፍሳችን እጅግ ብትደነግጥም ግን ይኽ የስድብ መንፈስን ጠላት ሰይጣን በምድራችን ላይ በመጨረሻው ዘመን እንደሚያመጣው መጽሐፍ ቅዱስ እንዲኽ ይናገራልና የቃሉን መፈጸም እናስተውላለን፡-
ይኸውም ጠላት ሰይጣን በትዕቢተኞች መናፍቃን ልብ በማደር የእግዚአብሔርን ስም እንደሚያቃልል፤ በቅዱሳን ላይ ኹል ጊዜ እንደሚከፋና እንደሚሳደብ ዳዊት እንዲኽ ይላል፡-
","kid","off");
INSERT INTO rule VALUES("2022-06-17","hhhhhhh","mek","on");





CREATE TABLE `saving` (
  `sav_no` int(22) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(22) NOT NULL,
  `Lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `balance` double NOT NULL,
  `percent` float NOT NULL,
  `date` date NOT NULL,
  `interest_update` date NOT NULL,
  PRIMARY KEY (`sav_no`),
  KEY `AccNumber` (`AccNumber`),
  CONSTRAINT `saving_ibfk_3` FOREIGN KEY (`AccNumber`) REFERENCES `customer` (`AccNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO saving VALUES("8","hana","haysh","2303","6067.215","0.05","2017-06-22","2017-06-23");
INSERT INTO saving VALUES("9","wudnesh","balew","2307","2210","0.05","2017-06-22","2017-06-22");





CREATE TABLE `savingrequest` (
  `sreq_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Amount` double NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`sreq_no`),
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO savingrequest VALUES("12","hana","haysh","2303","5000","2017-06-22","Done");
INSERT INTO savingrequest VALUES("13","wudnesh","balew","2307","2000","2017-06-22","Done");
INSERT INTO savingrequest VALUES("14","hana","haysh","2303","500","2017-06-22","Done");





CREATE TABLE `serv` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(22) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `description` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(4) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO serv VALUES("5","Credit		","Delivery","on");
INSERT INTO serv VALUES("6","Micro	","Insurance","on");
INSERT INTO serv VALUES("7","Fund	","Managment","on");
INSERT INTO serv VALUES("8","Money	","Transfer","on");
INSERT INTO serv VALUES("9","ብድርን"," ማዳረስ","off");
INSERT INTO serv VALUES("10","የዋስትና ","አገልግሎት","off");
INSERT INTO serv VALUES("11","ገንዘብን"," ማስተዳደር","off");
INSERT INTO serv VALUES("12","ብርን ","ማዘዋወር","off");





CREATE TABLE `withdrwalrequest` (
  `wreq_no` int(22) NOT NULL AUTO_INCREMENT,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `AccNumber` int(22) NOT NULL,
  `Amount` double NOT NULL,
  `Date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`wreq_no`),
  KEY `AccNumber` (`AccNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO withdrwalrequest VALUES("20","hana","haysh","2303","1000","2017-06-22","Done");
INSERT INTO withdrwalrequest VALUES("21","hana","haysh","2303","500","2017-06-22","Done");



