# MySQL dump 7.1
#
# Host: localhost    Database: ALOHcl
#--------------------------------------------------------
# Server version	3.22.32

#
# Table structure for table 'Cards'
#
CREATE TABLE Cards (
  indx int(11) DEFAULT '0' NOT NULL auto_increment,
  bus_type enum('PCI','AGP','ISA') DEFAULT 'PCI' NOT NULL,
  name varchar(50) DEFAULT '' NOT NULL,
  PRIMARY KEY (indx),
  KEY indx (indx),
  UNIQUE indx_2 (indx)
);

#
# Dumping data for table 'Cards'
#

INSERT INTO Cards VALUES (20,'PCI','Intel EtherPro 100');
INSERT INTO Cards VALUES (2,'PCI','Adaptec 2940U2W');
INSERT INTO Cards VALUES (5,'PCI','Voodoo3 2000');
INSERT INTO Cards VALUES (4,'PCI','Intraserver 6100L');
INSERT INTO Cards VALUES (6,'PCI','Diamond Fireport 40');
INSERT INTO Cards VALUES (7,'PCI','Oxygen ACX');
INSERT INTO Cards VALUES (8,'PCI','Matrox G200 SGRAM');
INSERT INTO Cards VALUES (9,'PCI','3Com 3c905-B');
INSERT INTO Cards VALUES (10,'PCI','ASUS SC200 ( NCR 53c810 )');
INSERT INTO Cards VALUES (11,'PCI','CNET CN100TX');
INSERT INTO Cards VALUES (12,'AGP','Matrox G400 32MB');
INSERT INTO Cards VALUES (13,'PCI','Tekram DC390U2W, U2W-SCSI');
INSERT INTO Cards VALUES (14,'PCI','SoundBlaster 128PCI');
INSERT INTO Cards VALUES (15,'ISA','SoundBlaster AWE64');
INSERT INTO Cards VALUES (16,'PCI','Digital DE500');
INSERT INTO Cards VALUES (17,'PCI','Tekram DC-390 Ultra');
INSERT INTO Cards VALUES (18,'PCI','Matrox Millennium II');
INSERT INTO Cards VALUES (19,'PCI','Adaptec 2940UW');
INSERT INTO Cards VALUES (21,'PCI','Digital DS21140');
INSERT INTO Cards VALUES (22,'PCI','Mylex DAC960 PD(U)-2');
INSERT INTO Cards VALUES (23,'PCI','Number 9 Revolution IV');
INSERT INTO Cards VALUES (24,'PCI','Intraserver ITI-3140U UltraWide SCSI controller');
INSERT INTO Cards VALUES (25,'ISA','Sound Blaster 16');
INSERT INTO Cards VALUES (26,'PCI','Voodoo 3 3000');
INSERT INTO Cards VALUES (27,'PCI','Generic DEC 21141 ether');
INSERT INTO Cards VALUES (28,'PCI','Datastorm 32+');
INSERT INTO Cards VALUES (29,'PCI','Diamond Fire GL 1000 Pro');
INSERT INTO Cards VALUES (30,'PCI','Tekram DC-390F');
INSERT INTO Cards VALUES (31,'PCI','Netgear FA311');
INSERT INTO Cards VALUES (32,'PCI','Netgear FA310TX');
INSERT INTO Cards VALUES (33,'PCI','S3 Trio64');
INSERT INTO Cards VALUES (34,'ISA','3Com 3c509B');
INSERT INTO Cards VALUES (35,'ISA','Adaptec AHA1742A (EISA)');
INSERT INTO Cards VALUES (36,'PCI','Myricom, Myrinet adaptors');
INSERT INTO Cards VALUES (37,'PCI','DEC KZPCM-XX (Intraserver ITI-4280UE-U)');
INSERT INTO Cards VALUES (38,'ISA','NE 2000 clone');
INSERT INTO Cards VALUES (39,'PCI','ICP Vortex 5318RS');
INSERT INTO Cards VALUES (40,'ISA','Pro audio spectrum');
INSERT INTO Cards VALUES (41,'PCI','Matrox millennium');
INSERT INTO Cards VALUES (42,'PCI','Matrox Mystique');
INSERT INTO Cards VALUES (43,'ISA','Gravis Ultra PnP');
INSERT INTO Cards VALUES (44,'PCI','Lynksys EtherPCI');
INSERT INTO Cards VALUES (45,'PCI','Number Nine FX Motion 771 (S3 968) 2M Video');
INSERT INTO Cards VALUES (46,'PCI','Galaxie Group Venus DGX4 (S3 ViRGE) 4MB Video');
INSERT INTO Cards VALUES (47,'PCI','Actiontec 56K PCI Call Waiting Modem');
INSERT INTO Cards VALUES (48,'PCI','Hauppauge WinTV Go! Tuner');
INSERT INTO Cards VALUES (49,'PCI','Creative Ensoniq AudioPCI');
INSERT INTO Cards VALUES (50,'PCI','ATI Xpert98 8M Rage Pro');
INSERT INTO Cards VALUES (51,'PCI','S3 Virge/DX');
INSERT INTO Cards VALUES (52,'PCI','QLogic ISP1040B');
INSERT INTO Cards VALUES (53,'PCI','AVM Fritz!PCI ISDN adapter');
INSERT INTO Cards VALUES (54,'PCI','3com 3c900 Combo [Boomerang]');
INSERT INTO Cards VALUES (55,'PCI','ATI Xpert@Play (3D Rage Pro 215GP)');
INSERT INTO Cards VALUES (56,'PCI','NCR 53c825 (Symbios)');
INSERT INTO Cards VALUES (57,'PCI','Symbios 53c875J');
INSERT INTO Cards VALUES (58,'PCI','Ati Xpert@Work 8Mb');
INSERT INTO Cards VALUES (59,'PCI','Symbios SYM8952U');
INSERT INTO Cards VALUES (60,'PCI','NCRc895');
INSERT INTO Cards VALUES (61,'PCI','ZLXp-E3 DEC TGA video card');
INSERT INTO Cards VALUES (62,'PCI','DEC DC21040 ethernet card');
INSERT INTO Cards VALUES (63,'PCI','Symbios 8952U');
INSERT INTO Cards VALUES (64,'PCI','ZLXp-E3 DEC TGA');
INSERT INTO Cards VALUES (65,'PCI','NCR 53c810');
INSERT INTO Cards VALUES (66,'PCI','Creative Blaster Exxtreme 3D (Permedia2) 4MB');
INSERT INTO Cards VALUES (67,'ISA','Creative Soundblaster Vibra16 PNP');
INSERT INTO Cards VALUES (68,'PCI','3Com 3C595-TX');
INSERT INTO Cards VALUES (69,'PCI','Diamond Stealth 64 Video VRAM');
INSERT INTO Cards VALUES (70,'PCI','Intraserver 4280UE');
INSERT INTO Cards VALUES (71,'ISA','SupraExpress 56i Sp modem (model SUP2084)');
INSERT INTO Cards VALUES (72,'ISA','Creative Labs AWE64 sound card');
INSERT INTO Cards VALUES (73,'PCI','FL-1960-TX');
INSERT INTO Cards VALUES (74,'PCI','ELSA Gloria Synergy 8MB');
INSERT INTO Cards VALUES (103,'PCI','3Comm 3c905C');
INSERT INTO Cards VALUES (76,'PCI','Adaptec 29160');
INSERT INTO Cards VALUES (77,'PCI','ATI 3D Charger');
INSERT INTO Cards VALUES (78,'ISA','Creative Labs AWE 32 PNP');
INSERT INTO Cards VALUES (79,'PCI','IntraServer ITI-6101U2');
INSERT INTO Cards VALUES (81,'PCI','Sound blaster Live');
INSERT INTO Cards VALUES (82,'PCI','Generic BT878 TV Tuner');
INSERT INTO Cards VALUES (83,'PCI','Compaq 64-Bit Dual Channel Wide Ultra2 SCSI Adapte');
INSERT INTO Cards VALUES (84,'PCI','Zynx quad ethernet card');
INSERT INTO Cards VALUES (85,'PCI','Advansys Ultra SCSI ABP940U');
INSERT INTO Cards VALUES (86,'PCI','Linksys Etherfast 10/100 w/WOL');
INSERT INTO Cards VALUES (87,'PCI','Intel EtherExpress PRO10+');
INSERT INTO Cards VALUES (88,'PCI','PowerStorm 3D30T');
INSERT INTO Cards VALUES (89,'PCI','Permidia2 based');
INSERT INTO Cards VALUES (90,'PCI','S3 ViRGE');
INSERT INTO Cards VALUES (91,'PCI','Generic Mach 64 ATI card 2 meg');
INSERT INTO Cards VALUES (92,'PCI','Number Nine #9GXE64+');
INSERT INTO Cards VALUES (93,'PCI','Digital DE450');
INSERT INTO Cards VALUES (94,'PCI','Intel EtherExpress Pro 100');
INSERT INTO Cards VALUES (95,'PCI','QLogic ISP1020');
INSERT INTO Cards VALUES (96,'PCI','Diamond Stealth 64 DRAM');
INSERT INTO Cards VALUES (97,'PCI','ATI Mach 64');
INSERT INTO Cards VALUES (98,'PCI','SymBIOS Logic 53c810a');
INSERT INTO Cards VALUES (99,'PCI','3D Labs Oxygen 402');
INSERT INTO Cards VALUES (100,'PCI','S3 Vision868');
INSERT INTO Cards VALUES (101,'PCI','S3 64V+');
INSERT INTO Cards VALUES (104,'PCI','53C896 Dual Chan PCI-64');
INSERT INTO Cards VALUES (105,'PCI','53C896 Dual Chan PCI-64');
INSERT INTO Cards VALUES (106,'PCI','Adaptec 39160 ( PCI-64 )');
INSERT INTO Cards VALUES (107,'PCI','ESS Technology ES1969 Solo-1 Audiodrive (rev 01)');
INSERT INTO Cards VALUES (108,'PCI','Linksys Lite-On Communications Inc LNE100TX (rev 2');
INSERT INTO Cards VALUES (109,'PCI','');
INSERT INTO Cards VALUES (110,'PCI','Elsa Victory 3D (S3 Virge)');
INSERT INTO Cards VALUES (111,'PCI','Powerstorm 4D60T');
INSERT INTO Cards VALUES (112,'ISA','AVM FRITZ!CLASSIC');
INSERT INTO Cards VALUES (113,'PCI','Elsa GLoria XL');
INSERT INTO Cards VALUES (114,'PCI','Voodoo 5');
INSERT INTO Cards VALUES (115,'PCI','Hoontech Digital XG');
INSERT INTO Cards VALUES (116,'PCI','ATI Rage 128 GL 16 MB Video Card');
INSERT INTO Cards VALUES (117,'PCI','Diamond Fire GL 1000 pro');
INSERT INTO Cards VALUES (118,'PCI','Diamond Fire GL 1000');
INSERT INTO Cards VALUES (119,'PCI','Promise Ultra 100');
INSERT INTO Cards VALUES (120,'PCI','ATI Radeon 32MB SDR');
INSERT INTO Cards VALUES (121,'PCI','ZLXp-E1 TGA 2 MB');
INSERT INTO Cards VALUES (122,'PCI','ITI 4280 dual UW scsi/Fast Ethernet');
INSERT INTO Cards VALUES (123,'PCI','Mylex BT-958');
INSERT INTO Cards VALUES (124,'PCI','generic PDC20265 UDMA EIDE controller');
INSERT INTO Cards VALUES (125,'PCI',' Number9 FX Reality 332 (Virge/2MB/PCI)');
INSERT INTO Cards VALUES (126,'PCI','VooDoo 4500 pci videocard');
INSERT INTO Cards VALUES (127,'PCI','ATI All In Wonder PRO (8Mb)');
INSERT INTO Cards VALUES (128,'PCI','Addonics SV550 (Yamaha 724)');
INSERT INTO Cards VALUES (129,'PCI','ATI Rage IIc');
INSERT INTO Cards VALUES (130,'ISA','ALS100+ Soundcard');
INSERT INTO Cards VALUES (131,'PCI','Promise Ultra133 TX2');
INSERT INTO Cards VALUES (132,'PCI','BusLogic BT-958 Wide Ultra SCSI');
INSERT INTO Cards VALUES (133,'PCI','Voodoo Banshee');
INSERT INTO Cards VALUES (134,'PCI','');
INSERT INTO Cards VALUES (135,'PCI','Connect3D ATI All-In-Wonder VE PCI (Radeon 7500, 6');
INSERT INTO Cards VALUES (136,'','');
INSERT INTO Cards VALUES (137,'PCI','Siig 1394, USB 2.0, 10/100 net combo');
INSERT INTO Cards VALUES (138,'PCI','C-Media CM8738');
INSERT INTO Cards VALUES (139,'','');
INSERT INTO Cards VALUES (140,'PCI','ELSA GLORIA-L');
INSERT INTO Cards VALUES (141,'ISA','Gravis Ultrasound Max');
INSERT INTO Cards VALUES (142,'PCI','KZPEA (Adaptec 3960D)');
INSERT INTO Cards VALUES (143,'PCI','3DLabs Oxygen VX1 32m');
INSERT INTO Cards VALUES (144,'PCI','Intraserver ITI4140UE-4V');
INSERT INTO Cards VALUES (145,'PCI','Via Rhine 10/100 ethernet');
INSERT INTO Cards VALUES (146,'PCI','Q-TEC ATA RAID 133   Silicon Image Chipset (Sil680');
INSERT INTO Cards VALUES (147,'PCI','Adaptec AHA2940');
INSERT INTO Cards VALUES (148,'PCI','S3 Trio3D V2/DX');
INSERT INTO Cards VALUES (149,'PCI','S3 Trio 3D');
INSERT INTO Cards VALUES (150,'ISA','Intel NE100');
INSERT INTO Cards VALUES (151,'PCI','Intraserver ITI6221 Dual U2W/Dual NIC/VGA');

#
# Table structure for table 'Configs'
#
CREATE TABLE Configs (
  indx int(11) DEFAULT '0' NOT NULL auto_increment,
  platform tinyint(4) DEFAULT '0' NOT NULL,
  srm_rev tinyint(4) DEFAULT '0' NOT NULL,
  user_name varchar(50) DEFAULT '' NOT NULL,
  email varchar(60) DEFAULT '' NOT NULL,
  worky_srm enum('Yes','No','N/A') DEFAULT 'Yes' NOT NULL,
  notes text NOT NULL,
  insdate datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  card_tested int(11),
  worky_linux enum('Yes','No') DEFAULT 'Yes' NOT NULL,
  PRIMARY KEY (indx),
  KEY indx (indx),
  UNIQUE indx_2 (indx)
);

#
# Dumping data for table 'Configs'
#

INSERT INTO Configs VALUES (4,7,1,'Rich Payne','rdp at alphalinux dot org','Yes','Requires API A5.5-82 SRM for onboard\r\nadaptec.','2000-09-07 10:05:14',2,'Yes');
INSERT INTO Configs VALUES (2,8,4,'Rich Payne','rdp at alphalinux dot org','Yes','XFree86 4.0','2000-09-07 09:57:01',5,'Yes');
INSERT INTO Configs VALUES (3,8,4,'Rich Payne','rdp at alphalinux.org','No','Uses sym53c8xx driver.','2000-09-07 10:02:41',6,'Yes');
INSERT INTO Configs VALUES (5,1,4,'Rich Payne','rdp at alphalinux dot org','Yes','','2000-09-07 13:51:08',19,'Yes');
INSERT INTO Configs VALUES (6,7,1,'T. Weyergraf','kirk@colinet.de','Yes','Uses XFree 4.0/4.0.1 No Multihead\r\nsupport. Debian 2.2, RedHay 6.1/6.2','2000-09-08 05:11:28',8,'Yes');
INSERT INTO Configs VALUES (7,7,1,'T. Weyergraf','kirk@colinet.de','No','Works 10/100/100FD Modes. Debian 2.2\r\nRedHat 6.1/6.2','2000-09-08 05:13:49',9,'Yes');
INSERT INTO Configs VALUES (8,7,1,'T.Weyergraf','kirk@colinet.de','Yes','Debian 2.2, RedHat 6.1/6.2.','2000-09-08 05:28:08',10,'Yes');
INSERT INTO Configs VALUES (9,7,1,'T. Weyergraf','kirk@colinet.de','Yes','XFree 4.0/4.0.1, Debian 2.2, RH 6.1/6.2','2000-09-08 05:30:29',5,'Yes');
INSERT INTO Configs VALUES (10,1,5,'T. Weyergraf','kirk@colinet.de','Yes','21143-based Ethernet. Can netboot.','2000-09-08 08:20:06',11,'Yes');
INSERT INTO Configs VALUES (11,9,4,'FMS Computer + Komm.sys.','infos@fms-computer.com','Yes','Works with Xfree 3.3.6 and Xfree 4.0.1,\r\nGLX hardware acceleration for G400\r\nworks with Xfree 4.0.1','2000-09-08 17:30:50',12,'Yes');
INSERT INTO Configs VALUES (12,20,6,'Ryan Kirkpatrick','linux@rkirkpat.net','Yes','Not sure on compat w/SRM, as the XL366\r\nhas only AlphaBIOS (newest rev of late\r\nlast year), where it does appear to\r\nwork fine. Otherwise, works great with\r\nLinux.','2000-09-08 18:36:38',16,'Yes');
INSERT INTO Configs VALUES (13,20,6,'Ryan Kirkpatrick','linux@rkirkpat.net','No','Not sure on compat. w/SRM as the XL366\r\nonly has AlphaBios. Newest rev of\r\nAlphaBIOS (as of late last year) can\r\nsee the SCSI chains attached to these\r\ncards, though I have never tried to\r\nboot off of them. Otherwise they work\r\njust fine. Used the NCR53C8xx kernel\r\ndriver, the same that works with the\r\nXL366\'s onboard SCSI interface.','2000-09-08 18:40:51',17,'Yes');
INSERT INTO Configs VALUES (14,1,7,'Doug Larrick','doug at ties dot org','Yes','','2000-09-08 20:07:51',19,'Yes');
INSERT INTO Configs VALUES (15,1,7,'Doug Larrick','doug at ties dot org','Yes','','2000-09-08 20:08:11',18,'Yes');
INSERT INTO Configs VALUES (21,2,6,'Constantine Vetoshev','constantine.vetoshev@dartmouth.edu','N/A','','2000-09-09 10:04:07',9,'Yes');
INSERT INTO Configs VALUES (22,2,6,'Constantine Vetoshev','constantine.vetoshev@dartmouth.edu','N/A','Bugs in the Ensoniq chipset that the SB128 uses result in hard crashes.','2000-09-09 10:06:36',14,'No');
INSERT INTO Configs VALUES (23,2,6,'Constantine Vetoshev','constantine.vetoshev@dartmouth.edu','N/A','Yet another piece of hardware that Alphas generally work with that crashes with the UX boards.','2000-09-09 10:07:35',5,'No');
INSERT INTO Configs VALUES (24,8,7,'Matt Burke','spraints1@yahoo.com','N/A','','2000-09-09 11:30:16',21,'Yes');
INSERT INTO Configs VALUES (25,8,3,'Charles Chandler','clc31@cornell.edu','Yes','Works in previous revisions of SRM and AlphaBIOS','2000-09-09 15:42:11',18,'Yes');
INSERT INTO Configs VALUES (26,8,3,'Charles Chandler','clc31@cornell.edu','N/A','Not specifically recognized under SRM but there is a Compaq HOWTO on booting from some Mylex cards under SRM.\r\nIs recognized under AlphaBIOS.\r\n\r\n','2000-09-09 15:45:46',22,'Yes');
INSERT INTO Configs VALUES (27,8,3,'Charles Chandler','clc31@cornell.edu','Yes','','2000-09-09 15:47:41',24,'Yes');
INSERT INTO Configs VALUES (28,8,3,'Charles Chandler','clc31@cornell.edu','N/A','','2000-09-09 15:50:11',25,'Yes');
INSERT INTO Configs VALUES (29,2,6,'Stefan Reinauer','stepan@suse.de','Yes','This card works with Linux, but it doesnt initialize correctly\r\nwith a Deskstation ARCS Bios because of the firmwares buggy ix86 emulation.\r\nUnluckily there will be no new firmware updates for the Ruffian boards.\r\nMILO initializes the card fine, so if you have an automatically booting system\r\nyou get Linux up and running even with this exotic piece of hardware.\r\nThe Revolution IV works well with SRM on other platforms.','2000-09-09 15:51:42',23,'Yes');
INSERT INTO Configs VALUES (30,1,7,'Dave Gilbert','linux@treblig.org','N/A','2D works fine (XFree 4), 3D still being\r\nworked on.  Needs a recent MILO/AlphaBIOS','2000-09-09 16:38:21',26,'Yes');
INSERT INTO Configs VALUES (31,1,7,'Dave Gilbert','linux@treblig.org','N/A','','2000-09-09 16:41:55',27,'Yes');
INSERT INTO Configs VALUES (32,1,4,'Peter Petrakis','ppetrakis@alphalinux.org','Yes','XFree-4.0 required. XFree-3.6 causes hard lock.','2000-09-09 17:08:07',26,'Yes');
INSERT INTO Configs VALUES (33,1,4,'Peter Petrakis','ppetrakis@alphalinux.org','No','','2000-09-09 17:09:03',6,'Yes');
INSERT INTO Configs VALUES (35,1,4,'Peter Petrakis','ppetrakis@alphalinux.org','Yes','','2000-09-09 17:11:29',28,'Yes');
INSERT INTO Configs VALUES (36,1,4,'Peter Petrakis','ppetrakis@alphalinux.org','Yes','','2000-09-09 17:12:02',16,'Yes');
INSERT INTO Configs VALUES (37,1,4,'Peter Petrakis','ppetrakis@alphalinux.org','Yes','','2000-09-09 17:14:17',29,'Yes');
INSERT INTO Configs VALUES (38,1,4,'Peter Petrakis','ppetrakis@alphalinux.org','N/A','Using 2.4.x kernel with kernel isa PnP and soundblaster driver compiled in.','2000-09-09 17:15:35',15,'Yes');
INSERT INTO Configs VALUES (39,8,8,'Christopher C. Chimelis','chris@debian.org','Yes','Uses the SYM53C8XX driver.','2000-09-09 17:22:21',30,'Yes');
INSERT INTO Configs VALUES (61,3,4,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','This is one of the earlier rev cards (one that actually has the  DEC based chipset on it)','2000-09-11 08:54:36',32,'Yes');
INSERT INTO Configs VALUES (41,8,8,'Christopher C. Chimelis','chris@debian.org','Yes','Uses the tulip driver.  There are several revisions of this card, of which I have tested rev 20 and 21.','2000-09-09 17:26:46',32,'Yes');
INSERT INTO Configs VALUES (42,8,8,'Christopher C. Chimelis','chris@debian.org','Yes','An old card, but works fine with the S3 Xserver from 3.3.6 (untested with XF86 4.0.x).','2000-09-09 17:28:52',33,'Yes');
INSERT INTO Configs VALUES (43,50,9,'Sebastian Moeller','sebastian.moeller@lur.rwth-aachen.de','Yes','3Com 3c509B NIC works in Linux, woks not in SRM','2000-09-10 08:39:14',35,'Yes');
INSERT INTO Configs VALUES (44,7,1,'Iwao','makino@hpc.co.jp','N/A','Only tested SAN/LAN, no Myrinet 2000 test yet.\r\n\r\n','2000-09-10 21:04:14',36,'Yes');
INSERT INTO Configs VALUES (45,44,1,'Jim Barriault','jbarriau@endeavor.dwc.edu','Yes','','2000-09-11 01:19:22',34,'Yes');
INSERT INTO Configs VALUES (47,44,10,'Jim Barriault','jbarriau@endeavor.dwc.edu','Yes','Seen as comet by tru64.','2000-09-11 01:24:57',29,'Yes');
INSERT INTO Configs VALUES (48,3,10,'','','Yes','','2000-09-11 01:31:58',29,'Yes');
INSERT INTO Configs VALUES (49,24,12,'','','No','Seen by linux if support is in the kernel\r\nbut not from SRM','2000-09-11 01:35:42',34,'Yes');
INSERT INTO Configs VALUES (50,24,12,'','','Yes','','2000-09-11 01:36:12',16,'Yes');
INSERT INTO Configs VALUES (51,1,10,'','','No','Works great as long as you build support\r\nin for it.','2000-09-11 01:38:27',2,'Yes');
INSERT INTO Configs VALUES (52,24,12,'Jim Barriault','jbarriau@endeavor.dwc.edu','No','Needs support in kernel to work.\r\nnot tried as module.','2000-09-11 01:41:32',9,'Yes');
INSERT INTO Configs VALUES (53,3,10,'Jim Barriault','jbarriau@endeavor.dwc.edu','No','','2000-09-11 01:42:42',34,'Yes');
INSERT INTO Configs VALUES (54,3,10,'','','Yes','','2000-09-11 01:48:43',37,'Yes');
INSERT INTO Configs VALUES (55,3,10,'','','No','','2000-09-11 01:55:20',9,'Yes');
INSERT INTO Configs VALUES (56,8,7,'Jaap Hogenberg','jaap.hogenberg@nl.abnamro.com','No','Modular , in 2.0 and 2.2 , need to\r\nspecify io address on ISA cards.','2000-09-11 05:00:55',38,'Yes');
INSERT INTO Configs VALUES (59,30,6,'Marco','marco.cisneros@gecapital.com','N/A','Tested on version 6.2','2000-09-11 08:20:48',18,'Yes');
INSERT INTO Configs VALUES (60,8,4,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','This is one of the earlier rev cards (one that actually has the  DEC based chipset on it)','2000-09-11 08:54:28',32,'Yes');
INSERT INTO Configs VALUES (58,7,1,'Kevin Wood','klwood@atipa.com','No','The card works fine under the Alpha \r\nPlatform if used with a boot disk/drive.\r\nIt can only be used as a storage drive as \r\nthe RH CD is missing a complete module.  \r\nThe driver and utility for controlling the \r\nraid are version matched, so please \r\ncontact tech support if you experience \r\nany problems getting the card to work.\r\n','2000-09-11 07:23:11',39,'Yes');
INSERT INTO Configs VALUES (62,1,4,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','This is one of the earlier rev cards (one that actually has the  DEC based chipset on it)','2000-09-11 08:54:43',32,'Yes');
INSERT INTO Configs VALUES (63,3,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-11 08:56:03',28,'Yes');
INSERT INTO Configs VALUES (64,8,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-11 08:56:13',28,'Yes');
INSERT INTO Configs VALUES (65,19,7,'J. Schellekens','schj at xs4all.nl','N/A','','2000-09-11 09:03:22',15,'Yes');
INSERT INTO Configs VALUES (66,19,7,'J. Schellekens','schj at xs4all.nl','N/A','Does _not_ work after a soft reboot \r\nto milo only, otherwise ok.','2000-09-11 09:05:38',40,'Yes');
INSERT INTO Configs VALUES (67,19,7,'J. Schellekens','schj at xs4all.nl','N/A','Also works in dual headed configuration\r\nusing Metro-X','2000-09-11 09:08:00',41,'Yes');
INSERT INTO Configs VALUES (68,55,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-11 09:08:06',28,'Yes');
INSERT INTO Configs VALUES (69,55,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-11 09:08:18',20,'Yes');
INSERT INTO Configs VALUES (70,55,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','This is the older rev (DEC Chip based)','2000-09-11 09:08:46',32,'Yes');
INSERT INTO Configs VALUES (71,55,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','No','','2000-09-11 09:09:03',9,'Yes');
INSERT INTO Configs VALUES (72,55,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-11 09:09:28',16,'Yes');
INSERT INTO Configs VALUES (73,55,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','This is the DAC960 w/ the DEC Prom in it (v 2.42) Linux only supports cards w/ firmware greater than 3.0','2000-09-11 09:10:27',22,'No');
INSERT INTO Configs VALUES (74,8,8,'Hannes Reinecke','hare@palamedes.de','Yes','XFree86 4.0 problematic. Contact me for a fix.','2000-09-11 09:18:24',42,'Yes');
INSERT INTO Configs VALUES (75,1,7,'Jeff Hagan','','N/A','ISAPnp + ALSA sound drivers using interwave module\r\n','2000-09-11 09:54:54',43,'Yes');
INSERT INTO Configs VALUES (76,1,7,'Jeff Hagan','','N/A','DEC Tulip chip.  This is not the EtherPCI II which uses an AMD chip.\r\n','2000-09-11 09:58:49',44,'Yes');
INSERT INTO Configs VALUES (77,51,6,'Michael Champigny','michael.champigny@compaq.com','No','ARC recognizes this card, but not SRM.','2000-09-11 10:15:33',45,'Yes');
INSERT INTO Configs VALUES (78,1,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','This is the DAC960 w/ the DEC Prom in it (v 2.42) Linux only supports cards w/ firmware greater than 3.0','2000-09-11 10:17:50',22,'No');
INSERT INTO Configs VALUES (79,3,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-11 10:20:08',16,'Yes');
INSERT INTO Configs VALUES (80,3,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-11 10:20:29',20,'Yes');
INSERT INTO Configs VALUES (81,51,6,'Michael Champigny','michael.champigny@compaq.com','No','You need to boot with ARC firmware.\r\nSRM on the Multia is too old to \r\nrecognize any cards other than TGA.','2000-09-11 10:20:50',46,'Yes');
INSERT INTO Configs VALUES (87,52,12,'Michael Champigny','michael.champigny@compaq.com','Yes','Works perfectly with kernel es1371 \r\nkernel module. No wavetable synth\r\nsupport for MIDI though. Use timidity\r\ninstead.','2000-09-11 11:39:54',49,'Yes');
INSERT INTO Configs VALUES (83,3,10,'izaak b.','hevenu@earthling.net','Yes','I have used the MMII with SuSE 6.1, 6.3 and Red Hat 5.2 and 6.2 with \nXF86_SVGA and encountered no problems. Had to manually set the memory amount','2000-09-11 11:14:32',18,'Yes');
INSERT INTO Configs VALUES (84,30,6,'Marco Hernandez','marco.cisneros@gecapital.com','N/A','Tested on Redhat 6.2','2000-09-11 11:19:48',19,'Yes');
INSERT INTO Configs VALUES (85,52,12,'Michael Champigny','michael.champigny@compaq.com','Yes','Works out of the box, but I could not\r\nget it to work on PCI bus 1 or 2. I had\r\nto put the card in the 1st slot (bus 0)\r\nto get a dial tone. Timing issue?','2000-09-11 11:29:48',47,'Yes');
INSERT INTO Configs VALUES (86,52,12,'Michael Champigny','michael.champigny@compaq.com','Yes','The bt848 chipset is supported and the\r\nTV works great. Use line1 on the mixer\r\nto adjust the volume. I could not get\r\noverlay mode to work with my ATI card\r\nthough. Use grab mode for now. Xv is\r\nprobably not supported completely for\r\nthe ATI yet.','2000-09-11 11:32:19',48,'Yes');
INSERT INTO Configs VALUES (88,52,12,'Michael Champigny','michael.champigny@compaq.com','Yes','Very fast and reliable card. Utah-GLX\r\nand Mesa support indirect 3D though\r\nI could not get DMA working with \r\nUtah-GLX. Maybe DRI will have direct\r\n3D support.','2000-09-11 11:44:39',50,'Yes');
INSERT INTO Configs VALUES (91,24,6,'Arc C.','achapkis@dls.net','N/A','It\'s an AS200 4/233.\r\nI use ARC to boot.','2000-09-11 12:26:41',9,'Yes');
INSERT INTO Configs VALUES (92,24,6,'Arc C.','achapkis@dls.net','Yes','AS200 4/233 - the only Alpha I have.\r\nUsed to have SRM and it worked there as well as now in ARC.','2000-09-11 12:32:35',51,'Yes');
INSERT INTO Configs VALUES (93,60,3,'Peter Rival','frival@zk3.dec.com','Yes','','2000-09-11 13:05:31',20,'Yes');
INSERT INTO Configs VALUES (94,60,3,'Peter Rival','frival@zk3.dec.com','Yes','','2000-09-11 13:06:45',52,'Yes');
INSERT INTO Configs VALUES (95,43,6,'Thorsten Kranzkowski','dl8bcu@gmx.net','N/A','No problems at all.','2000-09-11 13:35:42',53,'Yes');
INSERT INTO Configs VALUES (96,43,6,'Thorsten Kranzkowski','dl8bcu@gmx.net','N/A','','2000-09-11 13:38:01',54,'Yes');
INSERT INTO Configs VALUES (97,43,6,'Thorsten Kranzkowski','dl8bcu@gmx.net','N/A','Using Digital\'s VGA Emulation code in MILO 2.2','2000-09-11 13:42:31',55,'Yes');
INSERT INTO Configs VALUES (98,1,7,'Marius Hillenbrand','marius@sirius.inka.de','N/A','Great card, but I\'m still waiting for DRI-support','2000-09-11 14:02:58',5,'Yes');
INSERT INTO Configs VALUES (99,1,7,'Marius Hillenbrand','marius@sirius.inka.de','N/A','Hard lockup when I try to play sounds.\r\nI tried all pci-slots without any success','2000-09-11 14:04:18',14,'No');
INSERT INTO Configs VALUES (100,1,7,'Marius Hillenbrand','marius@sirius.inka.de','No','','2000-09-11 14:04:57',25,'Yes');
INSERT INTO Configs VALUES (101,1,11,'Ray Barksdale','barksdale@mdot.state.ms.us','N/A','yeah, yeah, I know its old...','2000-09-11 20:13:40',56,'Yes');
INSERT INTO Configs VALUES (102,1,11,'Ray Barksdale','barksdale@mdot.state.ms.us','N/A','Do these ever NOT work?','2000-09-11 20:17:25',57,'Yes');
INSERT INTO Configs VALUES (103,23,6,'Jussi-Pekka Hakala','jussi-pekka.hakala@velco.fi','N/A','','2000-09-12 01:53:14',58,'Yes');
INSERT INTO Configs VALUES (104,55,12,'Michael Champigny','michael.champigny@compaq.com','Yes','Works using XFree86-3.3.6 and up with\r\nthe 3DLabs driver.','2000-09-12 16:18:22',66,'Yes');
INSERT INTO Configs VALUES (105,24,12,'Michael Champigny','michael.champigny@compaq.com','Yes','Works using isapnp utility, including\r\nMIDI capability. I needed to move the\r\nconsole speaker wire over to the \r\nSB16 from the builtin card to get\r\nbeeps to go there.','2000-09-12 16:26:29',67,'Yes');
INSERT INTO Configs VALUES (106,9,11,'Kurt Ludwig','Kurt.Ludwig@alpha-processor.com','No','','2000-09-12 16:41:36',9,'Yes');
INSERT INTO Configs VALUES (107,9,11,'Kurt Ludwig','Kurt.Ludwig@alpha-processor.com','Yes','82557 and 82559 chipsets.','2000-09-12 16:42:50',20,'Yes');
INSERT INTO Configs VALUES (108,9,11,'Kurt Ludwig','Kurt.Ludwig@alpha-processor.com','Yes','','2000-09-12 16:43:07',19,'Yes');
INSERT INTO Configs VALUES (109,9,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','No','','2000-09-12 16:46:18',68,'Yes');
INSERT INTO Configs VALUES (110,9,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-12 17:00:41',41,'Yes');
INSERT INTO Configs VALUES (111,8,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-12 17:07:52',69,'Yes');
INSERT INTO Configs VALUES (112,3,11,'Kurt Ludwig','kurt.ludwig@alpha-processor.com','Yes','','2000-09-12 17:07:58',69,'Yes');
INSERT INTO Configs VALUES (113,1,7,'Alan Young','ayoung@teleport.com','N/A','','2000-09-13 01:30:57',26,'Yes');
INSERT INTO Configs VALUES (114,1,7,'Alan Young','ayoung@teleport.com','N/A','','2000-09-13 01:35:42',70,'Yes');
INSERT INTO Configs VALUES (115,1,7,'Alan Young','ayoung@teleport.com','N/A','','2000-09-13 01:38:52',71,'Yes');
INSERT INTO Configs VALUES (116,1,7,'Alan Young','ayoung@teleport.com','N/A','','2000-09-13 01:40:27',72,'Yes');
INSERT INTO Configs VALUES (117,1,5,'T. Weyergraf','kirk@colinet.de','No','RealTek RTL-8139B based Networkcard','2000-09-13 03:10:49',73,'Yes');
INSERT INTO Configs VALUES (118,30,7,'Jason','dubrow@woah.com','Yes','frame buffer support does not work','2000-09-13 11:01:34',41,'Yes');
INSERT INTO Configs VALUES (119,26,12,'Alex Angerhofer','alex at chem dot ufl dot edu','Yes','','2000-09-13 22:56:43',63,'Yes');
INSERT INTO Configs VALUES (120,26,12,'Alex Angerhofer','alex at chem dot ufl dot edu','Yes','','2000-09-13 22:57:27',62,'Yes');
INSERT INTO Configs VALUES (121,26,12,'Alex Angerhofer','alex at chem dot ufl dot edu','Yes','','2000-09-13 22:58:10',65,'Yes');
INSERT INTO Configs VALUES (122,26,12,'Alex Angerhofer','alex at chem dot ufl dot edu','Yes','','2000-09-13 22:58:52',64,'Yes');
INSERT INTO Configs VALUES (123,30,14,'Mark Brown','mark@psychology.adelaide.edu.au','Yes','While this is a 64bit PCI card the\r\nfirmware (AlphaBios or SRM) will not\r\nallow the card in a 64 bit slot!\r\nMOST UNFORTUNATE.','2000-09-13 23:48:19',76,'Yes');
INSERT INTO Configs VALUES (124,33,16,'Christopher Stevens','stevensca@navair.navy.mil','Yes','Debian 2.2\r\nNetwork works\r\nNo X-server on Compaq QVision card','2000-09-14 16:27:14',62,'Yes');
INSERT INTO Configs VALUES (125,1,17,'Helge Kreutzmann','kreutzm at itp dot uni-hannover dot de','Yes','Contrary to AlphaBIOS the Adaptec Card\r\nBIOS cannot be accessed','2000-09-15 11:21:11',19,'Yes');
INSERT INTO Configs VALUES (126,1,17,'Helge Kreutzmann','kreutzm at itp dot uni-hannover dot de','Yes','','2000-09-15 11:24:01',77,'Yes');
INSERT INTO Configs VALUES (127,1,17,'Helge Kreutzmann','kreutzm at itp dot uni-hannover dot de','N/A','','2000-09-15 11:25:37',38,'Yes');
INSERT INTO Configs VALUES (129,1,5,'Hugh','hugh at lucia dot kjist dot ac dot kr','No','Could not even get the SRM prompt.\r\nThe screen message is saying that the \r\nconsole stopped because670 machine check.','2000-09-17 09:22:23',79,'Yes');
INSERT INTO Configs VALUES (131,10,19,'Rich Payne','rdp at alphalinux dot org','Yes','XFree86 3.3.6','2000-09-21 11:41:22',12,'Yes');
INSERT INTO Configs VALUES (132,2,6,'Simon Hart','sphart@u.genie.co.uk','N/A','Using ALSA','2000-09-25 17:51:36',81,'Yes');
INSERT INTO Configs VALUES (133,2,6,'Simon Hart','sphart@u.genie.co.uk','N/A','','2000-09-25 17:53:46',82,'Yes');
INSERT INTO Configs VALUES (134,31,8,'Stephen Degler','stephen@degler.net','Yes','','2000-09-26 20:07:29',79,'Yes');
INSERT INTO Configs VALUES (135,31,17,'Stephen Degler','stephen@degler.net','No','I used XFree86 4.0\r\n','2000-09-26 20:10:14',5,'Yes');
INSERT INTO Configs VALUES (136,31,8,'Stephen Degler','stephen@degler.net','No','worked with XFree86 4.0\r\n','2000-09-26 20:11:28',26,'Yes');
INSERT INTO Configs VALUES (137,31,8,'Stephen Degler','stephen@degler.net','Yes','Works with tulip driver, have not tested\r\nde4x5.  Running 100BaseT Full Duplex,\r\nno problems so far.\r\n','2000-09-26 21:00:54',84,'Yes');
INSERT INTO Configs VALUES (138,31,8,'Stephen Degler','stephen@degler.net','Yes','These are available ebay periodically.\r\nmust be in 32bit slot for SRM.','2000-09-26 21:10:49',83,'Yes');
INSERT INTO Configs VALUES (139,31,8,'Stephen Degler','stephen@degler.net','Yes','tested on XFree86 3.3.6','2000-09-26 21:14:12',18,'Yes');
INSERT INTO Configs VALUES (140,43,6,'thalunil','','N/A','The RealTek RTL-8029 PCI NIC \r\noperates well under 2.0 and 2.2 GNU/Linux.','2000-09-27 16:24:42',38,'Yes');
INSERT INTO Configs VALUES (141,8,8,'Samuel Torres','jabbalabba@linuxstart.com','No','','2000-09-30 08:38:26',85,'Yes');
INSERT INTO Configs VALUES (142,30,17,'Lee Morecroft','lee@thermo-nuclear.fsnet.co.uk','Yes','','2000-10-02 07:32:50',5,'Yes');
INSERT INTO Configs VALUES (143,2,20,'Stig Telfer','stig@alpha-processor.com','N/A','You should put the card into the 64-bit PCI slot','2000-10-02 08:02:16',74,'Yes');
INSERT INTO Configs VALUES (144,43,6,'Paavo Hartikainen','pahartik@sci.fi','N/A','Debian GNU/Linux 2.1, ARC 4.5, kernel\r\n2.2.9, 8/16 bits per pixel. Did not\r\nwork reliably as console but X was\r\nfine. Chip 86C375, XF86_SVGA. I did not test with SRM, I used ARC back then.\r\nhttp://www.deja.com/[ST_rn=ap]/getdoc.xp?AN=485478013&fmt=text','2000-10-08 14:41:29',51,'Yes');
INSERT INTO Configs VALUES (145,8,7,'Falk Hueffner','falk.hueffner@student.uni-tuebingen.de','N/A','','2000-10-12 18:49:40',49,'Yes');
INSERT INTO Configs VALUES (146,8,7,'Falk Hueffner','falk.hueffner@student.uni-tuebingen.de','N/A','','2000-10-12 18:50:31',29,'Yes');
INSERT INTO Configs VALUES (147,30,21,'James','jamesf@sequoia.net','Yes','','2000-10-13 20:35:51',51,'Yes');
INSERT INTO Configs VALUES (148,49,22,'Rob','rbyrnes@ozemail.com.au','Yes','','2000-10-18 22:43:00',30,'Yes');
INSERT INTO Configs VALUES (149,49,22,'Rob','rbyrnes@ozemail.com.au','Yes','','2000-10-18 22:43:46',41,'Yes');
INSERT INTO Configs VALUES (150,49,22,'Rob','rbyrnes@ozemail.com.au','No','Doesnt work with this version of SRM, have been informed that it may with later versions.','2000-10-18 22:46:17',87,'Yes');
INSERT INTO Configs VALUES (151,56,8,'Valle','qha921e@tninet.se','No','Working fine on RH 6.2','2000-10-24 16:44:17',49,'Yes');
INSERT INTO Configs VALUES (152,56,8,'Valle','qha921e@tninet.se','No','','2000-10-24 16:48:08',14,'Yes');
INSERT INTO Configs VALUES (153,56,8,'Valle','qha921e@tninet.se','Yes','','2000-10-24 16:48:59',74,'Yes');
INSERT INTO Configs VALUES (154,31,17,'Henry House','hajhouse@houseag.com','No','It works fine in 100mbps full-duplex. It quit working suddenly (an ifdown, ifup restored it) onece but I have never been able to track down the cause.','2000-10-26 19:56:24',20,'Yes');
INSERT INTO Configs VALUES (155,49,7,'','','Yes','','2000-10-31 14:46:22',63,'Yes');
INSERT INTO Configs VALUES (156,30,21,'James Fowler','jamesf@sequoia.net','Yes','The virtual frame buffer support in the kernel does not work well with this card.  Everything else seems to work great though.','2000-10-31 20:42:28',89,'Yes');
INSERT INTO Configs VALUES (157,7,2,'HUgh','hugh at lucia dot kjist dot ac dot kr','Yes','perfectly working','2000-11-02 23:05:08',79,'Yes');
INSERT INTO Configs VALUES (158,39,8,'Alfredo Ricciotti','alfredoricciotti@hotmail.com','Yes','My system have 256 Mb Ram and 12 Gb HD.\r\nCD-Rom and Tape Drivers.\r\nWorks with the built-in VGA cards in \r\nconsole mode only','2000-11-13 16:03:16',21,'Yes');
INSERT INTO Configs VALUES (159,8,8,'Christopher C. Chimelis','chris@debian.org','Yes','Works with XFree86 v4.0.1, but apparently only in 8bpp mode.  I am attempting to fix that problem.','2000-11-16 17:10:42',90,'Yes');
INSERT INTO Configs VALUES (160,8,3,'Andrew Humphrey','ajh@myinternet.com.au','No','Machine would not boot with card plugged\r\nin, worked just fine when using \r\nAlphaBios','2000-11-25 09:11:39',8,'Yes');
INSERT INTO Configs VALUES (161,3,10,'Simon Oterski','simon@oterski.de','Yes','looks fine in SRM, same as MilleniumII,\r\nrunning XFree86 4.0.1 (precompiled binaries),\r\nat 16bbp, 1024x768@85Hz. \r\n(kernel 2.4.0-t11, gcc 2.95.2)','2000-11-28 18:11:38',42,'Yes');
INSERT INTO Configs VALUES (162,43,23,'Brian Walton','brimus@gw.total-web.net','Yes','No problems even works with X (slowly)','2000-12-31 04:25:07',91,'Yes');
INSERT INTO Configs VALUES (163,57,24,'Mark Springer','mark.springer@getronics.com','Yes','It is actually an Olivetti LSX 7200. I did not get succeed in running X on it yet. Any hints? Please email me!','2001-01-05 13:37:15',20,'Yes');
INSERT INTO Configs VALUES (164,26,12,'Noah Ackerman','noahatnackdotorg','Yes','','2001-01-23 05:04:42',91,'Yes');
INSERT INTO Configs VALUES (165,26,12,'Noah Ackerman','noahatnackdotorg','Yes','','2001-01-23 05:05:44',89,'Yes');
INSERT INTO Configs VALUES (166,26,12,'Noah Ackerman','noahatnackdotorg','Yes','','2001-01-23 05:08:56',68,'Yes');
INSERT INTO Configs VALUES (167,45,20,'Noah Ackerman','noahatnackdotorg','Yes','Box is Aspen Alpine, close to EB64+','2001-01-23 05:11:01',91,'Yes');
INSERT INTO Configs VALUES (168,45,20,'Noah Ackerman','noahatnackdotorg','N/A','Tested in Aspen Alpine','2001-01-23 05:17:06',92,'Yes');
INSERT INTO Configs VALUES (169,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','Uses Kernel module de4x5.o','2001-01-24 00:12:16',93,'Yes');
INSERT INTO Configs VALUES (170,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','','2001-01-24 00:13:09',16,'Yes');
INSERT INTO Configs VALUES (171,38,3,'Sir Ace','chandleg@wizardsworks.org','No','Depends on the Card wether SRM picks it up or not.','2001-01-24 00:14:39',27,'Yes');
INSERT INTO Configs VALUES (172,38,3,'Sir Ace','chandleg@wizardsworks.org','No','Have to load it in the kernel or as a module,\r\nSRM will not find this card..  ','2001-01-24 00:15:55',9,'Yes');
INSERT INTO Configs VALUES (173,38,3,'Sir Ace','chandleg@wizardsworks.org','N/A','','2001-01-24 00:16:50',19,'Yes');
INSERT INTO Configs VALUES (174,38,3,'Sir Ace','chandleg@wizardsworks.org','No','Must be loaded from the kernel or through a module,\r\nThe card is not found by SRM','2001-01-24 00:20:36',94,'Yes');
INSERT INTO Configs VALUES (175,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','This is the SCSI controller built in\r\nthat the internal CD-ROM is attached to.','2001-01-24 00:22:10',65,'Yes');
INSERT INTO Configs VALUES (176,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','No problems with this card','2001-01-24 00:22:55',56,'Yes');
INSERT INTO Configs VALUES (177,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','This is the most common add on card fro these machines.','2001-01-24 00:25:08',95,'Yes');
INSERT INTO Configs VALUES (178,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','','2001-01-24 00:27:33',96,'Yes');
INSERT INTO Configs VALUES (179,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','','2001-01-24 00:29:03',97,'Yes');
INSERT INTO Configs VALUES (180,38,3,'Sir Ace','chandleg@wizardsworks.org','Yes','','2001-01-24 00:31:34',98,'Yes');
INSERT INTO Configs VALUES (181,3,13,'Sir Ace','chandleg@wizardsworks.org','Yes','Works as generic VGA only, drivers are not completed yet.','2001-01-24 00:37:12',99,'Yes');
INSERT INTO Configs VALUES (182,3,13,'Sir Ace','chandleg@wizardsworks.org','Yes','','2001-01-24 00:38:25',97,'Yes');
INSERT INTO Configs VALUES (183,4,13,'Sir Ace','chandleg@wizardsworks.org','Yes','','2001-01-24 00:41:37',95,'Yes');
INSERT INTO Configs VALUES (184,43,6,'Pete','petervds@hotmail.com','N/A','I havent installed X yet, but on the console it works fine. I also tried the S3 Vision868 I had lying around, which works as well. Apparantely only the Virge causes problems. Info@request.nl advises that the AXPpci33 shouldnt be used with a S3 Virge PCI video card but that Matrox Millennium I and II, ATI and other S3 chipsets will work.\r\n\r\nBonus tip from info@pieceby.com is that the cache chips on some 486 boards are the same as for the AXPpci33 - worked for me!!!\r\n','2001-01-24 16:37:31',101,'Yes');
INSERT INTO Configs VALUES (185,43,6,'Pete','petervds@hotmail.com','N/A','See S3 Trio64V+ entry for more info.','2001-01-24 16:45:57',100,'Yes');
INSERT INTO Configs VALUES (186,43,23,'Craig Ruff','crruff@qwest.net','Yes','','2001-01-28 13:59:53',18,'Yes');
INSERT INTO Configs VALUES (187,30,8,'','','Yes','','2001-01-31 15:10:36',63,'Yes');
INSERT INTO Configs VALUES (188,23,6,'Robin Rinkel','r.j.rinkel@the-collective.demon.nl','N/A','Runs with Linux kernel 2.2.5-16, \r\nand XFree86 3.9.17.','2001-02-20 18:26:04',64,'Yes');
INSERT INTO Configs VALUES (189,1,8,'Pierrick Hascoet','pierrick.hascoet@alias.fr','Yes','','2001-03-27 13:35:28',105,'Yes');
INSERT INTO Configs VALUES (190,1,8,'Pierrick Hascoet','pierrick.hascoet@alias.fr','Yes','','2001-03-27 13:37:09',106,'Yes');
INSERT INTO Configs VALUES (191,2,20,'Ron Farrer','rbf@farrer.net','N/A','Works perfectly with patch (to allow IRQ assignments) to kernel.','2001-04-02 14:28:50',107,'Yes');
INSERT INTO Configs VALUES (192,2,20,'Ron Farrer','rbf@farrer.net','N/A','Works great.','2001-04-02 14:29:50',41,'Yes');
INSERT INTO Configs VALUES (193,2,20,'Ron Farrer','rbf@farrer.net','N/A','Works great.','2001-04-02 14:30:39',65,'Yes');
INSERT INTO Configs VALUES (194,2,20,'Ron Farrer','rbf@farrer.net','N/A','Works perfectly.','2001-04-02 14:33:56',108,'Yes');
INSERT INTO Configs VALUES (195,2,20,'Ron Farrer','rbf@farrer.net','N/A','Works fine.','2001-04-02 14:35:39',18,'Yes');
INSERT INTO Configs VALUES (196,23,6,'Marcel Noe','marcel@xcore.net','N/A','I\'ve got the 4 MB card and it runs quite fine. But the configuration for 1280*1024@16 bit is a little bit tricky.','2001-04-21 07:20:50',42,'Yes');
INSERT INTO Configs VALUES (197,23,6,'Marcel Noe','euk@gmx.net','N/A','','2001-04-21 07:21:22',72,'Yes');
INSERT INTO Configs VALUES (198,23,6,'Marcel Noe','euk@gmx.net','N/A','Runs with the SVGA X-Server.','2001-04-21 07:23:40',110,'Yes');
INSERT INTO Configs VALUES (199,23,6,'Marcel Noe','','N/A','','2001-04-21 07:24:02',90,'Yes');
INSERT INTO Configs VALUES (200,23,6,'Marcel Noe','marcel@xcore.net','N/A','','2001-04-21 07:24:31',78,'Yes');
INSERT INTO Configs VALUES (201,30,6,'Per Wigren','wigren@home.se','Yes','Random freezes in XFree86 v4.0.0-3','2001-05-08 11:33:25',42,'Yes');
INSERT INTO Configs VALUES (202,30,6,'Per Wigren','wigren@home.se','Yes','Only works in Tru64 and NT :(','2001-05-08 11:37:18',111,'No');
INSERT INTO Configs VALUES (203,15,8,'pbl','paul-benoit.larochelle@z4-software.com','Yes','system freezes as soon as I \"ping\" it from another host','2001-05-11 12:33:31',16,'Yes');
INSERT INTO Configs VALUES (204,29,13,'Dominic Uliano','duliano@pervadenetworks.com','Yes','Other Info:\r\nRAM:64MB\r\nHD: 1GB, 2.1GB SCSI 50 pin\r\nOS Redhat 7.0\r\nComments:  Runs great. Install was very smooth. Should have a bit more RAM for Gnome','2001-05-15 11:15:12',62,'Yes');
INSERT INTO Configs VALUES (205,58,26,'Sebastian Moeller','sebastian.moeller@lur.rwth-aachen.de','Yes','This is the on-board fast scsi controller. (tested stable with 7 devices)','2001-05-15 17:12:35',65,'Yes');
INSERT INTO Configs VALUES (206,58,26,'Sebastian Moeller','sebastian.moeller@lur.rwth-aachen.de','Yes','','2001-05-15 17:14:32',18,'Yes');
INSERT INTO Configs VALUES (207,58,26,'Sebastian Moeller','sebastian.moeller@lur.rwth-aachen.de','N/A','','2001-05-15 17:16:38',112,'Yes');
INSERT INTO Configs VALUES (208,32,7,'Jim Broderick','broderick@linuxfreemail.com','N/A','2.4.4 kernel\r\nDetails at axplinux.freehosting.net','2001-06-04 03:34:25',81,'Yes');
INSERT INTO Configs VALUES (209,32,7,'Jim Broderick','broderick@linuxfreemail.com','N/A','Works in AlphaBIOS\r\nWorks in Xfree 4.0.3\r\nDetails at axplinux.freehosting.net','2001-06-04 03:37:19',114,'Yes');
INSERT INTO Configs VALUES (210,31,27,'Rob','rbyrnes at ozemail.com.au','Yes','Still toying with X','2001-06-05 01:43:50',113,'Yes');
INSERT INTO Configs VALUES (211,49,22,'Rob','rbyrnes at ozemail.com.au','Yes','','2001-06-05 01:48:55',93,'Yes');
INSERT INTO Configs VALUES (212,49,22,'Rob','rbyrnes at ozemail.com.au','Yes','','2001-06-05 01:50:33',13,'Yes');
INSERT INTO Configs VALUES (213,15,21,'','','Yes','','2001-06-05 04:53:00',37,'Yes');
INSERT INTO Configs VALUES (214,1,3,'Rich Payne','rdp@talisman.nospam-alphalinux.org','N/A','Using Alsa 0.9beta','2001-06-05 10:26:27',115,'Yes');
INSERT INTO Configs VALUES (215,43,6,'Tijs Melis','buster256@hotmail.com','N/A','Works fine No problems','2001-06-06 04:34:47',103,'Yes');
INSERT INTO Configs VALUES (216,58,24,'Richard Wilson','richard dot wilson at eds dot com','Yes','','2001-06-25 16:50:10',16,'Yes');
INSERT INTO Configs VALUES (217,58,24,'richard wilson','richard dot wilson at eds dot com','Yes','On board controller had to be disabled with motherboard jumper, only supported 800x600 dpi max, Tru-64 does not recognize S3 Virge, will use default 600x420 dpi only. LINUX supports up to 1152x864 dpi (maybe more with a better monitor?)','2001-06-25 16:55:01',51,'Yes');
INSERT INTO Configs VALUES (218,37,16,'Mark Gimelfarb','dawebber@atlas.cz','Yes','works well in RH 7.0 DOES not work w/ Mandrake install program, even text mode crashes for some reason. Framebuffer woes?\r\nPossible to install over a serial console, using dumb terminal connected to a  server management block serial port','2001-07-02 17:52:43',101,'Yes');
INSERT INTO Configs VALUES (219,37,16,'Mark Gimelfarb','dawebber@atlas.cz','Yes','supported very well. In fact, I booted from a drive on this adapater and installed on it as well','2001-07-02 17:53:51',56,'Yes');
INSERT INTO Configs VALUES (220,37,16,'Mark Gimelfarb','dawebber@atlas.cz','Yes','adapter works well, I haven\'t tried any devices on it yet though\r\nsupported both during the install and after that','2001-07-02 17:55:11',95,'Yes');
INSERT INTO Configs VALUES (221,15,13,'emmanuel pierre','epierre@e-nef.com','Yes','ICP Vortex Computersysteme GmbH GDT 6537RP','2001-07-05 06:14:43',109,'Yes');
INSERT INTO Configs VALUES (222,31,27,'Ean J. Price','ejprice@msedp.com','No','Works in AlphaBIOS but not SRM. Set up 2Gb IDE drive to boot from as workaround until I find a Qlogic SCSI card that the SRM will boot. The card works great in 32bit PCI. No go on the 64 bit PCI','2001-07-09 00:34:11',76,'Yes');
INSERT INTO Configs VALUES (223,31,27,'Ean J. Price','ejprice@msedp.com','No','Doesn\'t show up in SRM but Linux has no problem with it under RH 7.1 w/ stock kernel or 2.4.6 kernel.','2001-07-09 00:36:02',103,'Yes');
INSERT INTO Configs VALUES (224,32,27,'Ean J. Price','','Yes','','2001-07-09 00:39:12',109,'Yes');
INSERT INTO Configs VALUES (225,31,27,'Ean J. Price','ejprice@msedp.com','Yes','OVERCLOCKING!!! to 600Mhz\r\nReplace the stock processor fan with a high powered case fan. The stock fan must still be plugged to the mobo or SRM will shutdown. I moved it to the outside of the case opposite the lower from fan. The new fan FORCES cool air across the heatsink. Go to http://members.brabant.chello.nl/~s.vandereijk/miata-clocking.txt for jumper settings on Mobo. I clocked mine to 600Mhz and compiled Xfree86 4.10 without a hitch!!! The heatsink is barely warm to the touch.','2001-07-09 00:44:46',109,'Yes');
INSERT INTO Configs VALUES (226,8,7,'Thimo Neubauer','thimo@debian.org','N/A','works with both XFree 3.3.6 and 4.0.1;\r\nkernel framebuffer (2.4.6) works, but all colors\r\nvery much too bright (not very useful)','2001-07-10 08:52:51',58,'Yes');
INSERT INTO Configs VALUES (227,1,8,'nedums','nedums@mediasolv.com','Yes','','2001-07-16 02:54:43',118,'No');
INSERT INTO Configs VALUES (228,43,23,'Tilmann Krueger','tilmann.krueger@inpho.de','Yes','I\'m using Debian 2.2r2 with an XFree86 4.1.0 binary downloaded from xfree86.org\r\neverything works well, no problems','2001-08-20 05:10:25',41,'Yes');
INSERT INTO Configs VALUES (229,43,6,'Thomas Ronner','braque@hotmail.com','N/A','very slow (max 350 kB/s)','2001-08-21 20:28:03',38,'Yes');
INSERT INTO Configs VALUES (230,43,6,'Thomas Ronner','braque@hotmail.com','N/A','/proc/pci reports an unknown PCI device made by Promise; /proc/ide doesn\'t report anything regarding the Promise card. Tested with vanilla 2.4.9','2001-08-21 20:30:49',119,'No');
INSERT INTO Configs VALUES (231,58,26,'Sebastian Moeller','sebastian.moeller@lur.rwth-aachen.de','Yes','the card has an additional video in/out port (not tested). It works also under alphabios 5.69.','2001-08-24 05:34:59',74,'Yes');
INSERT INTO Configs VALUES (232,58,26,'Sebastian Moeller','sebastian.moeller@lur.rwth-aachen.de','No','this is a permedia2 based card. unlike the elsa synergy and the DEC comet card it is not supported under SRM. (not tested under linux - not much fun to go through srm aboot blindly)','2001-08-24 05:38:31',29,'No');
INSERT INTO Configs VALUES (233,30,7,'Richard Billingham','bill@billingham.co.uk','N/A','Seems to work well under XFree86 4.1.0, but when using TV-out feature it hangs machine at PALCODE bit when booting.','2001-09-05 18:12:35',120,'Yes');
INSERT INTO Configs VALUES (234,29,6,'Guido Serassio','guidos1966@yahoo.it','Yes','RHL 7.0, Kernels 2.2.19 & 2.4.7','2001-09-08 03:48:33',121,'Yes');
INSERT INTO Configs VALUES (235,40,17,'Peter Wolf','wolf.peter@planet-interkom.de','N/A','','2001-09-09 10:26:03',81,'Yes');
INSERT INTO Configs VALUES (236,31,27,'jurriaan','thunder7@xs4all.nl','Yes','tested in 32-bit pci slot','2001-10-02 10:15:02',122,'Yes');
INSERT INTO Configs VALUES (237,19,7,'juhana paavola','juhana.paavola@ratol.fi','N/A','Framebuffer doesn\'t work with kernel >=2.4.2.\r\nI haven\'t tried newer versions.\r\n\r\nWorks fine in X','2001-10-08 08:45:09',89,'Yes');
INSERT INTO Configs VALUES (238,8,5,'Brian Kurotsuchi','bkurotsu@lug.calpoly.edu','Yes','','2001-10-19 04:04:36',41,'Yes');
INSERT INTO Configs VALUES (239,8,7,'Brian Kurotsuchi','bkurotsu@lug.calpoly.edu','No','Not visible by SRM so far.  Great in AlphaBIOS.','2001-10-19 04:17:11',123,'Yes');
INSERT INTO Configs VALUES (240,23,6,'Coe Ohta','ohtacoe@ybb.ne.jp','N/A','Debian Potato, XF86_SVGA','2001-11-14 09:34:45',125,'Yes');
INSERT INTO Configs VALUES (241,31,27,'jurriaan','thunder7@xs4all.nl','No','use CONFIG_PDC20265_BURST to force the card to UDMA-100 mode. Works fine with UDMA100 IBM DTLA30745 harddisk, but SRM doesn\'t see it, so you still need a scsi disk to boot from.','2001-11-27 11:06:57',124,'Yes');
INSERT INTO Configs VALUES (242,31,27,'jurriaan','thunder7@xs4all.nl','Yes','Fine card. Recognized by SRM. One of the best pci 3d options, I believe.','2002-02-22 04:59:09',126,'Yes');
INSERT INTO Configs VALUES (243,31,27,'Karl Nyström','karl.nystrom@eudoramail.com','Yes','3D acc. works with XFree 4.0 & 4.2. I have not tried tv-in yet.','2002-03-13 03:18:32',127,'Yes');
INSERT INTO Configs VALUES (244,2,6,'A. Feldner','pelzi@flying-snail.de','N/A','Tested with kernels 2.2.18, 2.4.4/SuSE and 2.4.18.','2002-03-28 04:55:39',53,'Yes');
INSERT INTO Configs VALUES (245,2,6,'INSI','support@insi.fr','N/A','Works with SuSE 7.1 using Kernel driver','2002-05-29 03:41:09',107,'Yes');
INSERT INTO Configs VALUES (246,2,6,'INSI','support@insi.fr','N/A','(Permedia 2, 8Mb) Works with SuSE 7.1 and XFree 4.0.2','2002-05-29 03:47:12',29,'Yes');
INSERT INTO Configs VALUES (247,18,27,'Artur Bujdoso','artlace@erkel.hu','No','The SRM has an old revision of the BIOS emulator. ARC console powers up the card correctly and so does MILO. It\'s strange, because the newest SRM firmware contains an old version of BIOS emulation.','2002-08-29 04:24:15',26,'Yes');
INSERT INTO Configs VALUES (248,39,17,'Erwin de Beer','hapklaar@home.nl','Yes','','2002-10-20 09:37:15',54,'Yes');
INSERT INTO Configs VALUES (249,9,4,'fito','f-ito@aist.go.jp','Yes','A low-profile model (29160LP) was installed, by changing a bracket.','2003-02-14 00:21:09',76,'Yes');
INSERT INTO Configs VALUES (250,23,6,'Locutus','Locutus@blowlands.nl','N/A','the 2D part of the board(s) kind of works, Framebuffer etc. work. but X and/or writing images to the Framebuffer crashes the machine.','2003-03-20 09:22:23',111,'Yes');
INSERT INTO Configs VALUES (251,8,7,'Jure Buble','jure.buble@fov.uni-mb.si','N/A','','2003-03-23 13:38:02',128,'Yes');
INSERT INTO Configs VALUES (252,24,6,'Kool Dimas','kool.dimas@gmx.net','N/A','Works fine under ARC with MILO.','2003-03-26 09:26:43',129,'Yes');
INSERT INTO Configs VALUES (253,24,12,'Kool Dimas','kool.dimas@gmx.net','Yes','It works with SRM and ARC. I\'ve used this with isapnptools and it works fine with isapnp kernel module (2.4.18)','2003-03-26 09:30:01',130,'Yes');
INSERT INTO Configs VALUES (254,8,13,'Ryan Schaefer','rysch@chaank.com','No','Kernel 2.4.20 w/ Promise Driver Patch from www.promise.com (2.4.19 patch)','2003-04-22 02:26:39',131,'Yes');
INSERT INTO Configs VALUES (255,8,13,'Ryan Schaefer','rysch@chaank.com','No','','2003-04-22 02:36:28',132,'Yes');
INSERT INTO Configs VALUES (256,40,13,'Ryan Schaefer','rysch@chaank.com','No','','2003-04-22 02:56:09',2,'Yes');
INSERT INTO Configs VALUES (257,31,27,'Jan Hetges','tran@ms20.net','Yes','Who needs AlphaBios ???','2003-05-31 20:59:57',5,'Yes');
INSERT INTO Configs VALUES (258,15,14,'davids','pullingking@hotmail.com','No','','2003-06-04 05:36:43',50,'No');
INSERT INTO Configs VALUES (259,1,13,'Gregory P. Smith','greg-spam@electricrain.com','N/A','Using a 2.4.21 kernel both the 1394 (Firewire) and USB 2.0 on this card work great.  I haven\'t tested the network; its a realtek 8139 chip.','2003-08-07 22:36:03',137,'Yes');
INSERT INTO Configs VALUES (260,9,11,'Thimo Neubauer','thimo@debian.org','Yes','Works as PCI, will check for AGP-support soon','2003-09-29 17:24:41',129,'Yes');
INSERT INTO Configs VALUES (261,9,11,'Thimo Neubauer','thimo@debian.org','Yes','works fine with ALSA 0.9.6','2003-09-29 17:26:47',138,'Yes');
INSERT INTO Configs VALUES (262,30,27,'Lucas Tsatiris','ltsatir@internet.gr','Yes','You have to set manually the BUSID variable of the XF86Config to point to the 3DLabs GLINT DELTA device as it is reported by lspci. 1024x768 24bpp. Works perfect in console mode of course','2003-10-23 17:03:44',140,'Yes');
INSERT INTO Configs VALUES (263,52,12,'','','Yes','','2003-11-22 02:49:38',74,'Yes');
INSERT INTO Configs VALUES (264,19,7,'Reinout','reinout at mktaal dot nl','N/A','The wave part works fine, don\'t know about midi','2003-12-02 13:21:08',141,'Yes');
INSERT INTO Configs VALUES (265,38,29,'Jim','jbarriau@endeavor.dwc.edu','No','This adapter is basicaly an Adaptec AHA-39160.  It is seen in SRM as a SCSI device type c09005 name unknown.  No devices are visable but once booted any attached devices function normaly. ','2004-01-07 17:49:14',142,'Yes');
INSERT INTO Configs VALUES (266,1,8,'Jim','jbarriau@endeavor.dwc.edu','Yes','no problems','2004-01-07 17:59:50',143,'Yes');
INSERT INTO Configs VALUES (267,31,27,'Bert de Bruijn','bert+nospam@debruijn.be','N/A','using Red Hat Linux 7.2, kernel 2.4, xawtv.','2004-03-13 11:12:41',48,'Yes');
INSERT INTO Configs VALUES (268,31,27,'Bert de Bruijn','bert+nospam@debruijn.be','N/A','Red Hat Linux 7.2, kernel 2.4','2004-03-13 11:17:17',145,'Yes');
INSERT INTO Configs VALUES (269,29,27,'Uncurbed','uncurbed@swipnet.se','Yes','No problem at all here, running Debian','2004-04-04 16:58:01',33,'Yes');
INSERT INTO Configs VALUES (270,29,27,'Uncurbed','uncurbed@swipnet.se','Yes','Works excellent in Debian, the boot disk are also connected to it.\r\nThe transfer rate is 20 mb/s compared to the onboard 5 mb/s.','2004-04-04 17:01:25',30,'Yes');
INSERT INTO Configs VALUES (271,24,13,'','','Yes','','2004-05-06 19:45:58',139,'Yes');
INSERT INTO Configs VALUES (272,44,31,'Erkki Hoikka','ekijee@hotmail.com','Yes','','2004-06-18 23:03:33',30,'Yes');
INSERT INTO Configs VALUES (273,44,31,'Erkki Hoikka','ekijee@hotmail.com','Yes','','2004-06-18 23:04:05',41,'Yes');
INSERT INTO Configs VALUES (274,31,27,'Sebastian','aussenh@gmx.de','Yes','works fine under Redhat 7.2 Kernel 2.4\r\n24 bit / 1280x1024','2004-07-09 03:19:07',74,'Yes');
INSERT INTO Configs VALUES (275,31,27,'Sebastian','aussenh@gmx.de','Yes','works fine under Redhat 7.2 kernel 2.4\r\n24bit / 1280x1024','2004-07-09 03:20:15',133,'Yes');
INSERT INTO Configs VALUES (276,65,32,'Marc Schlensog','fishtank@web.de','Yes','','2004-07-12 14:06:01',122,'Yes');
INSERT INTO Configs VALUES (277,65,32,'Marc Schlensog','fishtank@web.de','Yes','','2004-07-12 14:06:47',29,'Yes');
INSERT INTO Configs VALUES (278,34,13,'','','No','','2004-07-22 11:48:43',147,'Yes');
INSERT INTO Configs VALUES (279,34,13,'','','N/A','\r\nWorks in SRM but not shown in PCI list. Will not do graphical install, or run X, with Redhat 7.2 ','2004-07-22 11:50:04',42,'Yes');
INSERT INTO Configs VALUES (280,34,13,'','','N/A','\r\nDisplays in SRM, but not shown in PCI list. Will not do graphical install, or run X, with Redhat 7.2','2004-07-22 11:52:07',148,'Yes');
INSERT INTO Configs VALUES (281,34,13,'','','No','\r\nWon\'t detect in either PnP or preconfigured. Works on the same machine under NT 4.0','2004-07-22 11:54:08',150,'No');
INSERT INTO Configs VALUES (282,16,30,'t','the os at unforgettable dotcom','Yes','','2004-07-31 06:28:21',18,'Yes');
INSERT INTO Configs VALUES (283,16,30,'t','the os at unforgettable dotcom','Yes','','2004-07-31 06:29:19',42,'Yes');
INSERT INTO Configs VALUES (284,16,30,'t','the os at unforgettable dotcom','No','Installs fine, module loads, then eventually hard freezes. I haven\'t tracked down how.','2004-07-31 06:32:20',138,'No');
INSERT INTO Configs VALUES (285,65,34,'Marc Schlensog','fishtank@web.de','No','Unfortunately this card is only supported in AlphaBIOS as a primary SCSI controller.\r\nThere seems to be a bug in the SRM code (for this machine?) that prevents the detection of devices behind PCI-PCI-bridges as recent as Intel 21050.','2004-08-10 04:28:44',151,'No');

#
# Table structure for table 'Platforms'
#
CREATE TABLE Platforms (
  indx smallint(6) DEFAULT '0' NOT NULL auto_increment,
  name varchar(15) DEFAULT '' NOT NULL,
  PRIMARY KEY (indx),
  KEY indx (indx)
);

#
# Dumping data for table 'Platforms'
#

INSERT INTO Platforms VALUES (1,'PC164lx');
INSERT INTO Platforms VALUES (2,'PC164ux');
INSERT INTO Platforms VALUES (3,'PC164');
INSERT INTO Platforms VALUES (4,'DS20/DP264');
INSERT INTO Platforms VALUES (5,'DS10');
INSERT INTO Platforms VALUES (6,'ES40');
INSERT INTO Platforms VALUES (7,'UP2000');
INSERT INTO Platforms VALUES (8,'PC164sx');
INSERT INTO Platforms VALUES (9,'UP1000');
INSERT INTO Platforms VALUES (10,'UP1100');
INSERT INTO Platforms VALUES (48,'PCI-64');
INSERT INTO Platforms VALUES (12,'DS20E');
INSERT INTO Platforms VALUES (13,'DS10L');
INSERT INTO Platforms VALUES (14,'AS1200');
INSERT INTO Platforms VALUES (15,'AS800');
INSERT INTO Platforms VALUES (16,'AS600');
INSERT INTO Platforms VALUES (17,'AS500 5/3xx');
INSERT INTO Platforms VALUES (18,'AS500 5/5xx');
INSERT INTO Platforms VALUES (19,'XL300');
INSERT INTO Platforms VALUES (20,'XL366');
INSERT INTO Platforms VALUES (21,'XL433');
INSERT INTO Platforms VALUES (22,'XL233');
INSERT INTO Platforms VALUES (23,'XL266');
INSERT INTO Platforms VALUES (24,'AS200');
INSERT INTO Platforms VALUES (25,'AS205');
INSERT INTO Platforms VALUES (26,'AS250');
INSERT INTO Platforms VALUES (27,'AS255');
INSERT INTO Platforms VALUES (28,'AS300');
INSERT INTO Platforms VALUES (29,'AS400');
INSERT INTO Platforms VALUES (30,'PWS433a/au');
INSERT INTO Platforms VALUES (31,'PWS500a/au');
INSERT INTO Platforms VALUES (32,'PWS600a/au');
INSERT INTO Platforms VALUES (33,'AS2100 4/xxx');
INSERT INTO Platforms VALUES (34,'AS2000 4/xxx');
INSERT INTO Platforms VALUES (35,'AS2100 5/xxx');
INSERT INTO Platforms VALUES (36,'AS2000 5/xxx');
INSERT INTO Platforms VALUES (37,'AS4000');
INSERT INTO Platforms VALUES (38,'AS4100');
INSERT INTO Platforms VALUES (39,'AS1000A 4/xxx');
INSERT INTO Platforms VALUES (40,'AS1000A 5/xxx');
INSERT INTO Platforms VALUES (41,'AS600A 5/xxx');
INSERT INTO Platforms VALUES (51,'UDB/Multia');
INSERT INTO Platforms VALUES (43,'AXPpci33');
INSERT INTO Platforms VALUES (44,'EB164');
INSERT INTO Platforms VALUES (45,'EB64+');
INSERT INTO Platforms VALUES (46,'EB66');
INSERT INTO Platforms VALUES (47,'EB66+');
INSERT INTO Platforms VALUES (49,'PC64');
INSERT INTO Platforms VALUES (50,'Jensen');
INSERT INTO Platforms VALUES (52,'XP1000');
INSERT INTO Platforms VALUES (53,'XP900');
INSERT INTO Platforms VALUES (54,'PC164rx');
INSERT INTO Platforms VALUES (55,'DS3300');
INSERT INTO Platforms VALUES (56,'DS5300');
INSERT INTO Platforms VALUES (57,'AS1000 4/xxx');
INSERT INTO Platforms VALUES (58,'AS1000 5/xxx');
INSERT INTO Platforms VALUES (59,'GS80');
INSERT INTO Platforms VALUES (60,'GS160');
INSERT INTO Platforms VALUES (61,'GS320');
INSERT INTO Platforms VALUES (62,'CS20');
INSERT INTO Platforms VALUES (64,'Takara');
INSERT INTO Platforms VALUES (65,'Eiger');

#
# Table structure for table 'SRMRevs'
#
CREATE TABLE SRMRevs (
  indx tinyint(4) DEFAULT '0' NOT NULL auto_increment,
  revision varchar(10) DEFAULT '' NOT NULL,
  PRIMARY KEY (indx),
  KEY indx (indx),
  UNIQUE indx_2 (indx)
);

#
# Dumping data for table 'SRMRevs'
#

INSERT INTO SRMRevs VALUES (1,'A5.5-82');
INSERT INTO SRMRevs VALUES (2,'V5.5-82');
INSERT INTO SRMRevs VALUES (3,'V5.8-10');
INSERT INTO SRMRevs VALUES (4,'V5.6-4');
INSERT INTO SRMRevs VALUES (5,'V5.6-3');
INSERT INTO SRMRevs VALUES (6,'MILO');
INSERT INTO SRMRevs VALUES (7,'AlphaBIOS');
INSERT INTO SRMRevs VALUES (8,'V5.8-1');
INSERT INTO SRMRevs VALUES (9,'ROM 1.7 SR');
INSERT INTO SRMRevs VALUES (10,'V5.5');
INSERT INTO SRMRevs VALUES (11,'V5.6');
INSERT INTO SRMRevs VALUES (12,'V7.0');
INSERT INTO SRMRevs VALUES (13,'');
INSERT INTO SRMRevs VALUES (14,'V7.1_3');
INSERT INTO SRMRevs VALUES (15,'V7.1_3');
INSERT INTO SRMRevs VALUES (16,'V5.3-2');
INSERT INTO SRMRevs VALUES (17,'V5.7-1');
INSERT INTO SRMRevs VALUES (19,'A5.6-9');
INSERT INTO SRMRevs VALUES (20,'ARCSBIOS');
INSERT INTO SRMRevs VALUES (21,'V6.8-20');
INSERT INTO SRMRevs VALUES (22,'A4.8-1');
INSERT INTO SRMRevs VALUES (23,'X4.7');
INSERT INTO SRMRevs VALUES (24,'V5.4');
INSERT INTO SRMRevs VALUES (25,'V5.4');
INSERT INTO SRMRevs VALUES (26,'V.5.4-104');
INSERT INTO SRMRevs VALUES (27,'V7.2-1');
INSERT INTO SRMRevs VALUES (28,'A5.8-81');
INSERT INTO SRMRevs VALUES (29,'V6.0-4');
INSERT INTO SRMRevs VALUES (30,'V7.2-2');
INSERT INTO SRMRevs VALUES (31,'V4.8-1');
INSERT INTO SRMRevs VALUES (32,'5.7-12');
INSERT INTO SRMRevs VALUES (33,'');
INSERT INTO SRMRevs VALUES (34,'A5.7-12');

