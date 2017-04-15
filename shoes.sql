-- MySQL dump 10.13  Distrib 5.6.20, for Win64 (x86_64)
--
-- Host: localhost    Database: shoes_db
-- ------------------------------------------------------
-- Server version	5.7.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer_info`
--

DROP TABLE IF EXISTS `customer_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_info` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_info`
--

LOCK TABLES `customer_info` WRITE;
/*!40000 ALTER TABLE `customer_info` DISABLE KEYS */;
INSERT INTO `customer_info` VALUES ('Shashank','Chandrakar','shashankchandrakarr@gmail.com','U2hhc2hhbms=');
/*!40000 ALTER TABLE `customer_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_cart`
--

DROP TABLE IF EXISTS `my_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_cart` (
  `email` varchar(30) NOT NULL,
  `product_code` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_cart`
--

LOCK TABLES `my_cart` WRITE;
/*!40000 ALTER TABLE `my_cart` DISABLE KEYS */;
INSERT INTO `my_cart` VALUES ('shashankchandrakarr@gmail.com',100,2),('shashankchandrakarr@gmail.com',104,2),('shashankchandrakarr@gmail.com',108,2);
/*!40000 ALTER TABLE `my_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_detail`
--

DROP TABLE IF EXISTS `product_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_detail` (
  `product_code` int(11) NOT NULL,
  `product_property` varchar(20) NOT NULL,
  `product_info` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_detail`
--

LOCK TABLES `product_detail` WRITE;
/*!40000 ALTER TABLE `product_detail` DISABLE KEYS */;
INSERT INTO `product_detail` VALUES (100,'Occasion','Casual'),(100,'Ideal For','Men'),(100,'Color','FTWWHT/CBLACK/METSIL'),(101,'Ideal For','Men'),(101,'Color','WHT/BLACK1/GUM5'),(102,'Occassion','Casual'),(102,'Ideal For ','Men'),(102,'Color','CBLACK/CBLACK/FTWWHT'),(103,'Ideal For','Men'),(103,'Occasion','Sports'),(103,'Closure','Laced'),(103,'Weight','204 gm (per single Shoe) - Weight of the product may vary depending on size.'),(103,'Style','Panel and Stitch Detail'),(103,'Technology Used','Traxion'),(103,'Design','Logo Detail'),(103,'Color','Ftwwht , Cblack, Solblu'),(103,'Other Details','Padded Footbed, 11 Plastic Studs on Sole'),(104,'Occasion','Sports'),(104,'Ideal For','Men'),(104,'Tip Shape','Round'),(104,'Closure','Laced'),(104,'Weight','236 g (per single Shoe) - Weight of the product may vary depending on size.'),(104,'Style','Panel and Stitch Detail,Textured Detail'),(104,'Color','MAICME/BYELLO/CBLACK'),(104,'Design ','Logo Detail'),(104,'Other Details','Cushioned Ankle and Tongue, Padded Footbed, 11 Plastic Studs on Sole, Agion Powerful Scent Protectio');
/*!40000 ALTER TABLE `product_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_detail_table`
--

DROP TABLE IF EXISTS `product_detail_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_detail_table` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` varchar(15) NOT NULL,
  `product_company` varchar(10) NOT NULL,
  `product_details` varchar(1000) NOT NULL,
  `product_price` float NOT NULL,
  `product_selling` float NOT NULL,
  `product_actual` float NOT NULL,
  PRIMARY KEY (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_detail_table`
--

LOCK TABLES `product_detail_table` WRITE;
/*!40000 ALTER TABLE `product_detail_table` DISABLE KEYS */;
INSERT INTO `product_detail_table` VALUES (100,'Adidas Courtvantage','Casual','Adidas','Inspired by the iconic Rod Laver, the original Court Vantage shoes were made for the tennis court and showcased clean lines and streamlined style. This season\'s mid-cut version of the women\'s shoes updates that simple style with a subtle and sophisticated look for today\'s streets. Built with a mesh overlay for a hypnotic optical effect, they feature details like printed 3-Stripes and a welded heel tab. A rubber outsole steps up the grip.\r\n<br/>	Mesh upper with leather overlays\r\n<br/>	Printed 3-Stripes\r\n<br/>	Canvas lining\r\n<br/>	Printed linear Trefoil on tongue\r\n<br/>	Welded backstrap\r\n<br/>	Vulcanised rubber outsole\r\n',4000,5000,5500),(101,'Adidas samba','Casual','Adidas','There\'s a reason this legendary indoor shoe still sells like mad. Perfection never goes out of style. Its soft leather upper and a low-profile gum rubber outsole give the elite player ultimate control.',3999,4000,4500),(102,'Adidas tubular','Casual','Adidas','Part of the style family that pushes the boundaries of design, these men\'s Tubular Radial shoes transform the iconic Tubular outsole with a serrated design that makes a strong statement. They feature a snug neoprene bootee upper and \'90s-inspired cutout 3-Stripes.',5000,5500,5400),(103,'Adidas 11pro TRX SG','Football','Adidas','The formula for Messi\'s rise to global dominance was pure and simple: transform fast into first. Utilize your explosive speed and agility to dominate your rivals in these soccer cleats. Featuring a foot-hugging AGILITY TOUCH SKIN upper for a locked-in fit. Designed to win on firm ground.',6000,6200,5900),(104,'Adidas messi 15.3 fgag','Football','Adidas','Messi makes his game look easy by combining creative quickness with force of will. These men\'s soccer cleats feature a messiTOUCH X-ray surface for precision in every touch. The dynamic messiGAMBETRAX stud configuration gives you traction for explosive, Messi-like speed.',10000,11000,9000),(105,'Adidas predator instinct','Football','Adidas','Ideal for professional as well as amateur soccer players, this pair of ‘Predito Instinct Tf’ football shoes by adidas is worth investing in. Featuring a lightweight synthetic upper with mesh lining, these black lace-ups for men have predator zones that heighten ball contact and grip. The ADIFIT® technology further ensures a snug and comfortable fit. Detailed with predator® skinny print, these shoes have a durable rubber outsole for better balance and traction',8000,8500,7500),(106,'Adidas alcor 1.0M','Running','Adidas','An apt pick for athletes, this pair of running shoes from Adidas is a must-have. Match it with your tracksuit to be comfortable on the track.Faster, lighter and smoother are these ‘Alcor 1.0’ men’s running shoes from adidas. Designed keeping in mind the quintessential necessities of a normal pronator, these white coloured lace-ups have:',5799,6000,5800),(107,'Adidas ezar','Running','Adidas','Comfortable and trendy, this pair of lightweight running shoes will keep you on your toes.Textured outsole with patterned grooves, has ADIWEAR technology that provides best durability in high wear areas.Run mile after mile with utmost confidence wearing these navy blue coloured \'Ezar 2.0\' running shoes from the house of adidas. Meant for women, these running shoes are quite high on quality.',9000,7500,8500),(108,'Adidas springblade','Running','Adidas','Specially crafted for the tough and aggressive sports person in you, this pair of running shoes from Adidas combines everything necessary - comfort, technique and durability.For enhanced efficiency on the running track, get hold of these ‘Springblade Solyce’ men’s running shoes from adidas.A pair of black running shoes with central lace-ups\r\nNo seam engineered mesh upper, lightly padded along the mouth\r\nSlightly cushioned footbed\r\nTextured outsole with patterned grooves that have Springblade technology offering individually tuned Energy Blades that make your run all the more comfortable',18000,12000,15000),(109,'Nike-air-force','Casual','Nike','Transcending foot coverage since 1982, this once hoops shoe was named after Air Force One, the aircraft that carries the U.S. President. It was the first basketball shoe to house Nike Air, revolutionizing the game for players like Moses Malone and Charles Barkley while rapidly gaining traction around the world, from the hardwood to the blacktop to the core of hip-hop culture. Today the Nike Air Force 1 stays true to its roots with soft, springy cushioning and a massive midsole, but the Nike Air technology takes a back seat to the shoe\'s status as an icon',5999,4900,4400),(110,'Nike-Air-Odyssey-Mens-Shoe','Casual','Nike','Leather and textile upper for premium style and a comfortable fit\r\n•  PU midsole with Air-Sole unit for lightweight cushioning\r\n•  Rubber outsole for durability and traction\r\n',3999,2500,3000),(111,'Nike-archive','Casual','Nike','OLD-SCHOOL STYLE. MODERN FINISH.\r\nThe Nike Archive 83.M Men\'s Shoe recalls a classic profile and applies premium details including a nylon, suede and mesh upper and flexible Waffle traction.\r\nBENEFIT\r\n•  Nylon, suede and mesh upper for a premium look and breathable comfort\r\n•  Dual density foam midsole for added comfort, and heel clip for stability\r\n•  Rubber outsole with Waffle forefoot pattern for durability and traction\r\n•  Outsole grooves for flexibility\r\n',3500,3199,3400),(112,'Nike Hypervenom','Football','Nike','Charismatic in style, this pair of all-black Hypervenom Phantom Football Shoes is a must-have when on that playing field. Strike fear into the hearts of your opponents as they look upon its beauty, as you kick your way to victory with the 12 studs on the outsole providing a license for more power.\r\nThat extra step one needs to excel at any sport - Nike wishes to be it. The brand infuses a little bit of itself into every piece of footwear it creates, giving the athlete - amateur or pro - the edge required to conquer a sport. Remaining true to its mantra, Nike makes it easy to just do it.\r\n',15000,11999,12000),(113,'Nike Magista Obra','Football','Nike','Lightweight NikeSkin technology wraps close to your foot for a natural touch, while an embossed texture on the upper helps enhance ball control.Lightweight, perforated sockliner mirrors the shape of your foot for comfort and low-profile cushioning.A combination of direct-inject blades and conical studs delivers serious multidirectional performance on short-grass fields.Four-cleat heel design provides optimal penetration and stability.Firm-ground (FG) cleats for use on short-grass fields that may be slightly wet but rarely muddy.',12000,8000,11000),(114,'Nike Mercurial Superfly ','Football','Nike','Let your little Messi zip through the opponents and score yet another goal with these ‘Mercurial Victory V Cr FG Jr’ soccer cleats from Nike. The features that make these black coloured lace-ups a must-have on the court.Pure speed made for everyone. A synthetic upper wraps your foot in comfort, while a Dynamic Fit Collar hugs your ankle for a seamless fit from leg to foot.\r\nSpeed rib design on the upper helps to lock the foot in during every turn and cut, while also adding a touch compound to the upper. A new redesigned outsole molds to the foot for an incredibly comfortable fit while chevron studs provide next level, straight line speed.',14000,10000,12999),(115,'Nike AIR-FOOTSCAPE-MAGISTA-FLYKNIT','Runnning','Nike','INCREDIBLE COMFORT. LIGHTWEIGHT FEEL.\r\nDesigned for the unstoppable playmaker, the Nike Air Footscape Magista Flyknit Men\'s Shoe reengineers the Magista soccer cleat for the street with a super-flexible, ultralight midsole and breathable Flyknit upper.\r\nBENEFITS\r\n•  Sock-like Flyknit upper conforms to your foot for lightweight support\r\n•  Premium leather details add durability\r\n•  High-top collar offers a seamless fit from ankle to foot\r\n•  Phylon midsole for durable, lightweight cushioning\r\n•  Waffle rubber outsole based on the iconic Footscape shoe provides traction and durability\r\n',6000,4999,5000),(116,'Nike  -Flyk- Nit- Mercurial','Running','Nike','PERFORMANCE INNOVATION MADE FOR THE STREETS\r\nNike F.C presents the Nike Free Flyknit Mercurial Men\'s Shoe, a remastered version of Cristiano Ronaldo\'s signature shoe designed for the streets with a lightweight, flexible Nike Free midsole. Visual details—like chrome-colored lace tips, a no-sew metallic silver Swoosh and a crackle pattern on the sockliner—mirror the bold aesthetic of the CR7 Chapter 2: Natural Diamond football boot while showcasing how the showstopper crafted his game under pressure\r\n',8000,4899,7000),(117,'Nike-lunarestoa','Running','Nike','PLUSH COMFORT\r\nThe Nike Lunarrestoa 2 Essential Men\'s Shoe has a lightweight midsole and seamless fabric upper for springy, responsive cushioning and comfort.\r\nBENEFITS\r\n•  No-sew textile upper for lightweight, streamlined comfort\r\n•  Lunarlon midsole with an IU carrier for springy, responsive cushioning\r\n•  Rubber outsole for durability and traction\r\n•  Rubber heel cage enhances durability and offers a modern look\r\n•  Flex grooves let your foot move naturally\r\n',7999,6500,7000),(118,'Puma EL midII DP sneakers','Casual','Puma','A pair of grey sneakers, has central lace-ups and mid-top styling. Perforated synthetic upper, has cushioning along the mouth. Cushioned footbed. Textured midsole with foxing along the forefoot. Textured outsole with patterned grooves and multiple branding. Warranty: 3 months against manufacturing defects only. Give a spunky makeover to your casual look by stepping into these casual shoes. These will look perfect when teamed with jeans and a sweatshirt.\r\n\r\n',5299,2345,5000),(119,'Puma G vilas','Casual','Puma','When Guillermo Vilas scored a tennis championship, Puma procured his winning style and re-engineered those attributes into this pair of Vilas L2 Sneakers. Composed of a rich leather outer and intricate cut work detail, you are guaranteed to embrace the summer-to-fall transition in style.\r\nBased in Germany, Puma is synonymous with comfort and style. Makers of stylish sports shoes, the brand keeps you in sync with the latest fashion trends.\r\nFootwear Care\r\nGently dust these sneakers with a soft brush.\r\n',5799,2999,5699),(120,'puma X TS blur mid','Casual','Puma','A pair of olive green and black casual shoes with central lace-ups. Mesh and synthetic leather upper. Cushioned footbed. Textured outsole with patterned grooves, enabled with TRINOMIC technology. Warranty: 3 months against manufacturing defects only. Get a load of comfort by sporting this stylish pair of casual shoes from the Trinomic Collection by PUMA. It can be teamed with almost any ensemble for a day out with friends.',8999,4599,7999),(121,'Puma Evopower','Football','Puma','The evopower 4.3 jr is an entry price football boot that follows closely the design language of the evopower 1.3. The evopower 4.3 jr combines lightweight, comfort and longevity by using a soft yet highly durable synthetic upper material. PUMA is the global athletic brand that successfully fuses influences from sport, lifestyle and fashion. PUMA\'s unique industry perspective delivers the unexpected in sport-lifestyle footwear, apparel and accessories, through technical innovation and revolutionary design',13599,11499,12699),(122,'Puma Evospeed','Football','Puma','Bring your innings at the pitch to a perfect end with this awesome pair of cricket shoes. Engineered with state of technologies, you will always find yourself ahead of your game with style.PUMA presents these blue coloured \'evoSPEED SL FG\' football shoes, which will let you give your best on the playground. Meant for men, these football shoes are high on quality.A pair of fluorescent green and neon pink cricket shoes, has central lace-ups\r\nSynthetic leather and mesh upper engineered with Speed Frame technology for superior comfort and a reinforced heel collar\r\nCushioned footbed with a speedCELL sockliner\r\nTextured outsole with patterned grooves and removable cleats.',21000,18999,20000),(123,'Puma king','Football','Puma','The new king ii is a modern and lightweight version of the most iconic football boot on the marketplace. The new ever fit lacing system ensures a snug fit in the mid foot, whilst the super soft premium leather upper material offers an excellent touch on the ball. The king ii features a minimalist external heel counter for improved heel fit and stability. The lightweight pebax outsole, with a mix of conical and traction studs, ensures the perfect balance between flexibility and maneuverability. PUMA is the global athletic brand that successfully fuses influences from sport, lifestyle and fashion. PUMA\'s unique industry perspective delivers the unexpected in sport-lifestyle footwear, apparel and accessories, through technical innovation and revolutionary design. ',25000,18499,22599),(124,'Puma Atom ','Running','Puma','Designed to offer you utmost comfort, this pair of running shoes will be a great addition to your footwear collection.Give a boost to your running or jogging sessions by wearing these ‘Forever Fashion DP’ running shoes for men by PUMA. Navy blue in colour, these lace-ups feature a mesh, synthetic leather upper and mesh lining, thus are durable and light in weight.A pair of white running shoes with central lace-ups\r\nMesh and synthetic upper\r\nCushioned footbed, has a removable sockliner\r\nThick midsole\r\nPatterned non-marking outsole with grooves, engineered with Evertrack technology....',2199,1500,1999),(125,'Puma BMW MS ','Running','Puma','The Bmw Ms Future Cat M1 Is A Material Update Of A Classic Motorsport Silhouette That Takes The Style Into The Future. Details Such As The Asymmetric Fit And The Cylindrical Heel All Remain The Same With The Jumping Cat Graphic On The Medial Side. Exclusive For Bmw The Propeller Logo Was Added On The Lateral Side As Well As The Bmw Motorsports Team Flag.',7399,5100,6899),(126,'Puma Running ','Running','Puma','A pair of white and blue printed running shoes with central lace-ups. Synthetic leather and mesh upper. Cushioned footbed, has a removable sockliner. Textured rubber outsole with patterned grooves. Warranty: 3 months against manufacturing defects only. Make your running sessions more stylish with this pair of running shoes from PUMA. \r\nTeam it with shorts and a tee for a sporty look.\r\n',6250,4250,5250);
/*!40000 ALTER TABLE `product_detail_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_info`
--

DROP TABLE IF EXISTS `product_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_info` (
  `product_code` int(11) NOT NULL,
  `product_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_info`
--

LOCK TABLES `product_info` WRITE;
/*!40000 ALTER TABLE `product_info` DISABLE KEYS */;
INSERT INTO `product_info` VALUES (100,'<ul>\r\n<li>	Mesh upper with leather overlays\r\n</li><li>	Printed 3-Stripes\r\n</li><li>	Canvas lining\r\n</li><li>	Printed linear Trefoil on  tongue\r\n</li><li>	Welded backstrap\r\n</li><li>	Vulcanised rubber outsole\r\n</li>\r\n<ul>'),(101,'<ul>\r\n<li>Full grain leather upper for comfort and soft feel\r\n</li><li>Durable gum-rubber outsole\r\n</li><li>Imported<ol>\r\n<li>Material: Leather\r\n</li> <li>Lifestyle: Casual\r\n</li> <li>Closure Type: Lace-Up\r\n</li> <li>Warranty Type: Manufacturer\r\n</li> <li>Product warranty against manufacturing defects: 30 days\r\n</li> <li>Care instructions: Clean your shoes with leather cleaner or leather shampoo, and use a good quality brush to remove loose surface dirt; if your shoes are wet after cleaning, let them air-dry before your proceed with the next step; dry shoes in room temperature only and never expose them to the sun, heat from the sun will cause the leather to shrink, wrinkle, harden, dry, and crack</li></ol></li></ul>\r\n'),(102,'<ul><li>Neoprene upper with pigskin 3-Stripes\r\n</li><li>Breathable mesh lining\r\n</li><li>Tongue pull tab\r\n</li><li>EVA midsole; Premium leather heel overlay\r\n</li><li>One-piece EVA outsole for lightweight flexibility and grip\r\n</li></ul>\r\n'),(103,'<ul><li>Taurus full grain calf leather upper for glovelike fit with high resistance to abrasion\r\n</li><li>Vamp stitching for durable fit in the forefoot area\r\n</li><li>Memory foam molds to the foot for a custom fit\r\n</li><li>Comfort frame to distribute pressure. Comfort outsole with smaller and more studs to penetrate firm ground for perfect traction\r\n</li><li>Soft comfort suede lining\r\n</ul>\r\n'),(104,'<ul><li>Synthetic\r\n</li><li>Imported\r\n</li><li>Synthetic sole\r\n</li><li>Streamlined soccer cleat with 3D synthetic leather upper featuring lace-up closure and signature logo on tongue\r\n</li><li>Messi logo on heel\r\n</li><li>Raised 3-D DRIBBLETEX and TRAXION outsole\r\n</li><li>There’s only one Messi. But this is your game, so make it your own. Our men’s Messi 10.3 soccer cleats have DRIBBLETEX raised 3-D grip outsoles for high-speed dribbling in any condition. And thanks to the Messi center stud and lightweight upper, you’ll have unmatched control on the pitch to keep you playing like the pros.\r\n</li></ul>\r\n'),(105,'<ol><li>leather-and-synthetic\r\n</li><li>Synthetic leather upper for light weight, comfort and perfect touch.\r\n</li><li>Nubuck-touch heel lining for supersoft comfort.\r\n</li><li>Die-cut EVA insole for light weight and comfort.\r\n</li><li>Compatible with miCoach\r\n</li></ol>\r\n'),(106,'<ul><li>Material: Mesh\r\n</li><li>Lifestyle: Casual\r\n</li><li>Closure Type: Lace-up\r\n</li><li>Warranty Type: Manufacturer\r\n</li><li>Product warranty against manufacturing defects: 90 days\r\n</li><li>Care Instructions: Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner\r\n</li></ul>\r\n'),(107,'\r\n<ul><li>Material: Mesh\r\n</li><li>Lifestyle: Casual\r\n</li><li>Closure Type: Lace-up\r\n</li><li>Warranty Type: Manufacturer\r\n</li><li>Product warranty against manufacturing defects: 90 days\r\n</li><li>Care Instructions: Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner\r\n</li></ul>\r\n'),(108,'<ul><li>Textile/Synthetic\r\n</li><li>Imported\r\n</li><li>Rubber sole\r\n</li><li>Streamlined low-profile running shoe featuring breathable-mesh forefoot with three-stripe patterning on sides\r\n</li><li>Traditional lacing system\r\n</li><li>Molded EVA sockliner\r\n</li><li>Highly abrasion-resistant Adiwear rubber outsole\r\n</li></ul>\r\n'),(109,'<ul><li>  Mid-top silhouette with ankle strap for secure lockdown.\r\n</li><li>  Leather and textile upper for premium durability and fit\r\n</li><li>  Metal tag on the laces reads \"AF-1 \'82\" to honor the shoe\'s debut\r\n</li><li>  Nike Air cushioning for comfort\r\n</li><li>  Non-marking rubber outsole for traction and durability\r\n</li><li>  Pivot points in the forefoot and heel for smooth transitions in all directions\r\n</LI></UL>\r\n'),(110,'<ul><li>  Leather and textile upper for premium style and a comfortable fit\r\n</li><li> PU midsole with Air-Sole unit for lightweight cushioning\r\n</li><li>  Rubber outsole for durability and traction</li></ul>\r\n'),(111,'<ul><li> Nylon, suede and mesh upper for a premium look and breathable comfort\r\n</li><li>  Dual density foam midsole for added comfort, and heel clip for stability\r\n</li><li>  Rubber outsole with Waffle forefoot pattern for durability and traction\r\n</li><li>  Outsole grooves for flexibility</li></ul>\r\n'),(113,'<ul><li>Leather\r\n</li><li>Synthetic sole\r\n</li><li>Textured Kangaroo leather is comfortable and creates superior ball touch. Flywire cables wrap the foot to create a supportive, glove-like fit.\r\n</li><li>Dynamic Fit collar creates a secure, supported fit.\r\n</li><li>ACC technology provides consistent ball control in both wet and dry conditions.\r\n</li><li>Anatomically correct shape for a glove-like fit. Molded sockliner cushions and reduces pressure from studs.\r\n</li><li>Nylon chassis with a Pebax¨ base supports and creates a responsive feel. Studs have TPU tips for durability.\r\n</li></ul>\r\n'),(112,'<ul><li>Flywire cables wrap the foot to create a supportive, glove-like fit\r\n\r\n</li><li>Textured synthetic leather upper creates superior ball touch\r\n\r\n</li><li>Dynamic Fit collar creates a secure, supported fit\r\n\r\n</li><li>ACC technology provides consistent ball control in both wet and dry conditions\r\n\r\n</li><li>Anatomically correct shape for a glove-like fit\r\n</li><li>\r\nMolded sockliner cushions to help reduce pressure from studs</li></ul>'),(114,' <ul><li>UPPER: Micro-textured Flyknit with NikeSkin for a barefoot feel. Flywire cable offers adaptive support. \r\n</li><li>   Molded insole that\'s perforated for breathability and reduced weight.\r\n </li><li>    A hidden heel counter is incased by the upper material on the shoe. This heel counter offers lightweight support to the back of your foot.\r\n</li><li>    OUTSOLE: Vapor traction system for grip in all directions. Carbon fiber plate with TPU bladed studs and screw-in studs for traction in all directions.\r\n</li></ul>\r\n'),(114,'<ul><li>  Sock-like Flyknit upper conforms to your foot for lightweight support\r\n</li><li>  Premium leather details add durability\r\n</li><li>  High-top collar offers a seamless fit from ankle to foot\r\n</li><li>  Phylon midsole for durable, lightweight cushioning\r\n</li><li>  Waffle rubber outsole based on the iconic Footscape shoe provides traction and durability\r\n</li></ul>\r\n'),(115,'<ul><li>Sock-like Flyknit upper conforms to your foot for lightweight support\r\n</li><li>  Premium leather details add durability\r\n</li><li>  High-top collar offers a seamless fit from ankle to foot\r\n</li><li>  Phylon midsole for durable, lightweight cushioning\r\n</li><li>  Waffle rubber outsole based on the iconic Footscape shoe provides traction and durability\r\n</li></ul>\r\n'),(116,'<ul><li>Flyknit upper with leather overlays for lightweight support\r\n</li><li>  Flywire cables for an adaptive fit\r\n</li><li>  Nike Free midsole with flex grooves for more natural movement\r\n</li><li>  Strategically placed rubber pods for durability in high-wear areas\r\n</li><li>  Sockliner made to the exact specifications of Cristiano Ronaldo\r\n</li><li>  Reflective elements stand out in low light</li></ul>\r\n'),(117,'<ul><li>  No-sew textile upper for lightweight, streamlined comfort\r\n</li><li>  Lunarlon midsole with an IU carrier for springy, responsive cushioning\r\n</li><li>  Rubber outsole for durability and traction\r\n</li><li>  Rubber heel cage enhances durability and offers a modern look\r\n</li><li>  Flex grooves let your foot move naturally</li></ul>\r\n'),(118,'<ul><li>Material: PU\r\n</li><li>Occasion: Casual\r\n</li><li>Color: Grey\r\n</li><li>Heel Height :  0 Inch </li></ul>\r\n'),(119,'<ul><li>Material: Genuine Leather\r\n</li><li>Occasion: Casual\r\n</li><li>Color: Navy, White</li></ul>\r\n'),(120,'<ul><li>Material: Mesh\r\n</li><Li>Occasion: Casual\r\n</li><li>Color: Green\r\n</li><li>Heel Height: 0 inch</li></ul>\r\n'),(121,'<ul><li>Occasion: Sports\r\n</li><li>Color: Blue</li></ul>\r\n'),(122,'<ul><li>Color: Blue, Fl Peach and Fl Yellow\r\n</li><li>Material: Soft synthetic leather\r\n</li><li>Lifestyle: Casual\r\n</li><li>Warranty Type: Manufacturer\r\n</li><li>Product warranty against manufacturing defects: 90 Days\r\n</li><li>Care Instructions: Allow your pair of shoes to air and de-odorize at regular basis; Use Shoe bags to prevent any stains or mildew; Dust any dry dirt from the surface using a clean cloth. Do not use Polish or Shiner.</li></ul>\r\n'),(123,'<ul><li>Material: Artificial Leather\r\n</li><li>Occasion: Sports\r\n</li><li>Color: White, Blue, Black</li></ul>\r\n'),(124,'<ul><li>Material: Synthetic\r\n</li><li>Lifestyle: Casual\r\n</li><li>Closure type: Lace-Up\r\n</li><li>Warranty type: Manufacturer\r\n</li><li>Product warranty against manufacturing defects: 90 Days\r\n</li><li>Care Instructions: Allow your pair of shoes to air and de-odorize at regular basis; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth; do not use polish or shiner</li></ul>\r\n'),(125,'<ul><li>Material: Rubber\r\n</li><li>Occasion: Sports\r\n</li><li>Color: White\r\n</li><li>Heel Height: 0 inch </li></ul>\r\n'),(126,'<ul><li>Material: PU\r\n</li><li>Occasion: Sports\r\n</li><li>Color: White\r\n</li><li>Heel Height: 0 inch </li></ul>\r\n');
/*!40000 ALTER TABLE `product_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-13 21:32:13
