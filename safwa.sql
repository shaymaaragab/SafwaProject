-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: safwa
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_ar` text COLLATE utf8mb4_unicode_ci,
  `entity_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aboutus_entity_id_foreign` (`entity_id`),
  CONSTRAINT `aboutus_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutus`
--

LOCK TABLES `aboutus` WRITE;
/*!40000 ALTER TABLE `aboutus` DISABLE KEYS */;
INSERT INTO `aboutus` VALUES (1,'about us','about us','<p><strong>About Us</strong></p>\r\n\r\n<p>Al Safwa family has always been known for its pioneer role in serving the UAE community and its residents, through providing them with the highest of quality in both service and products.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>History</strong></p>\r\n\r\n<p>Our Company traces its origin back to 2006 when a father, driven by a personal desire for better quality of life for his son (SAFWAT), reached beyond the UAE in search for means to mobilize &amp; make his son independent. Numerous requests from other parents and people with special needs, led to the founding of &ldquo;Al Safwa Mobility (ASM)&rdquo; in January 2007. The company had grown to become the only company in the Middle</p>\r\n\r\n<p>East offering a &ldquo;complete&rdquo; mobility solution.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Company Profile</strong></p>\r\n\r\n<p>Our organization enjoys strategic partnerships with leading manufacturers worldwide. Designed and manufactured by unsurpassed pioneers each in their field our products &amp; services represent the best value for your money. Today, tens of thousands of people worldwide, who would otherwise be limited to their homes, are enjoying a higher quality of life by using our principals&rsquo; equipment. Therapists recommend our products for their medical benefits, and we are driven by the voices and smiles of our customers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mission</strong></p>\r\n\r\n<p>moving <strong>LIIFE</strong> around you...</p>\r\n\r\n<p>Utilizing the latest assistive technology, ASM thrives to change people&rsquo;s lives through providing quality mobility products &amp; solutions. Our team of highly qualified professionals have been trained internationally to provide our clients with the highest quality of education, service &amp; support, to mobilize them wherever the need calls for.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In this case <strong>LIIFE </strong>means:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>*Better quality of <strong>L</strong>ife</p>\r\n\r\n<p>* <strong>I</strong>ndependence</p>\r\n\r\n<p>* <strong>I</strong>nclusion</p>\r\n\r\n<p>* <strong>F</strong>reedom</p>\r\n\r\n<p>* <strong>E</strong>asy accessibility</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If we manage to offer this type of mobility, we did not only transport a client, BUT we participated in &ldquo;adding a productive member to the community&rdquo;&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Vision</strong></p>\r\n\r\n<p>To be the region&rsquo;s leading mobility solutions provider by:</p>\r\n\r\n<p>&bull; Increasing awareness: Educating Therapists &amp; parents</p>\r\n\r\n<p>&bull; Clients&rsquo; loyalty: Offering high end services &amp; customer satisfaction</p>\r\n\r\n<p>&bull; Maintaining our pioneer position: Offering a complete solution</p>\r\n\r\n<p>&bull; Expanding our solutions: into the Middle East &amp; North Africa</p>\r\n\r\n<p>&bull; Eventually being a one stop shop when it comes to rehabilitation</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At ASM, we offer you a world class range of accessibility equipment and solutions that are designed to help you overcome barriers, stay independent and get to wherever you need to go.</p>\r\n\r\n<p>So if you have the will, we&rsquo;ve got the way...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Name of company: Al Safwa Mobility L.L.C.</p>\r\n\r\n<p>Legal Status of the company</p>\r\n\r\n<p>Limited Liability Company</p>\r\n\r\n<p>Registered Address of the Company</p>\r\n\r\n<p>P.O. Box 110445, Abu Dhabi, United Arab Emirates</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contacts </strong></p>\r\n\r\n<p>Telephone Number: +97125541414</p>\r\n\r\n<p>Telefax Number: +97125541415</p>\r\n\r\n<p>E-mail address: mobility@alsafwa.me</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Commence business: January 2007</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Major Shareholders:Dr.Hisham Safwat Farahat, Owner &amp; President of Al Safwa Mobility L.L.C.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Name of Management Personnel</p>\r\n\r\n<p>Name and Title :Dr. Hisham Safwat Farahat &nbsp;- President</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. Meqdad Mahmoud - General Manager</p>\r\n\r\n<p>&nbsp;</p>','<p><strong>About Us</strong></p>\r\n\r\n<p>Al Safwa family has always been known for its pioneer role in serving the UAE community and its residents, through providing them with the highest of quality in both service and products.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>History</strong></p>\r\n\r\n<p>Our Company traces its origin back to 2006 when a father, driven by a personal desire for better quality of life for his son (SAFWAT), reached beyond the UAE in search for means to mobilize &amp; make his son independent. Numerous requests from other parents and people with special needs, led to the founding of &ldquo;Al Safwa Mobility (ASM)&rdquo; in January 2007. The company had grown to become the only company in the Middle</p>\r\n\r\n<p>East offering a &ldquo;complete&rdquo; mobility solution.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Company Profile</strong></p>\r\n\r\n<p>Our organization enjoys strategic partnerships with leading manufacturers worldwide. Designed and manufactured by unsurpassed pioneers each in their field our products &amp; services represent the best value for your money. Today, tens of thousands of people worldwide, who would otherwise be limited to their homes, are enjoying a higher quality of life by using our principals&rsquo; equipment. Therapists recommend our products for their medical benefits, and we are driven by the voices and smiles of our customers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mission</strong></p>\r\n\r\n<p>moving <strong>LIIFE</strong> around you...</p>\r\n\r\n<p>Utilizing the latest assistive technology, ASM thrives to change people&rsquo;s lives through providing quality mobility products &amp; solutions. Our team of highly qualified professionals have been trained internationally to provide our clients with the highest quality of education, service &amp; support, to mobilize them wherever the need calls for.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In this case <strong>LIIFE </strong>means:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>*Better quality of <strong>L</strong>ife</p>\r\n\r\n<p>* <strong>I</strong>ndependence</p>\r\n\r\n<p>* <strong>I</strong>nclusion</p>\r\n\r\n<p>* <strong>F</strong>reedom</p>\r\n\r\n<p>* <strong>E</strong>asy accessibility</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If we manage to offer this type of mobility, we did not only transport a client, BUT we participated in &ldquo;adding a productive member to the community&rdquo;&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Vision</strong></p>\r\n\r\n<p>To be the region&rsquo;s leading mobility solutions provider by:</p>\r\n\r\n<p>&bull; Increasing awareness: Educating Therapists &amp; parents</p>\r\n\r\n<p>&bull; Clients&rsquo; loyalty: Offering high end services &amp; customer satisfaction</p>\r\n\r\n<p>&bull; Maintaining our pioneer position: Offering a complete solution</p>\r\n\r\n<p>&bull; Expanding our solutions: into the Middle East &amp; North Africa</p>\r\n\r\n<p>&bull; Eventually being a one stop shop when it comes to rehabilitation</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At ASM, we offer you a world class range of accessibility equipment and solutions that are designed to help you overcome barriers, stay independent and get to wherever you need to go.</p>\r\n\r\n<p>So if you have the will, we&rsquo;ve got the way...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Name of company: Al Safwa Mobility L.L.C.</p>\r\n\r\n<p>Legal Status of the company</p>\r\n\r\n<p>Limited Liability Company</p>\r\n\r\n<p>Registered Address of the Company</p>\r\n\r\n<p>P.O. Box 110445, Abu Dhabi, United Arab Emirates</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contacts </strong></p>\r\n\r\n<p>Telephone Number: +97125541414</p>\r\n\r\n<p>Telefax Number: +97125541415</p>\r\n\r\n<p>E-mail address: mobility@alsafwa.me</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Commence business: January 2007</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Major Shareholders:Dr.Hisham Safwat Farahat, Owner &amp; President of Al Safwa Mobility L.L.C.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Name of Management Personnel</p>\r\n\r\n<p>Name and Title :Dr. Hisham Safwat Farahat &nbsp;- President</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. Meqdad Mahmoud - General Manager</p>\r\n\r\n<p>&nbsp;</p>',1,'2017-08-24 11:18:29','2017-08-29 19:05:39',NULL),(2,'title 2','عنوان 2','<p><strong>ABOUT US</strong></p>\r\n\r\n<p>With headquarter in Abu Dhabi, United Arab Emirates, Al Safwa Healthcare (ASH) was <em>established in October 2012 </em>with the approval of Health Authority Abu Dhabi in <em>April 2013</em>.&nbsp; ASH is founded by the CEO Dr. Sayed El Farskoury, PhD. who has 30 years of experience in developing and managing rehabilitation services. With his vision of providing Professional Medical, Rehabilitation and Nursing services in collaboration with the multi disciplinary team, such as Physician, Rehabilitation group and Nurses.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>MISSION</strong></p>\r\n\r\n<p>Our mission is to effectively render exceptional standard of health service by our devoted, trustworthy and competent employees and to satiate the needs of individuals by providing&nbsp;quality home healthcare services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>VISION</strong></p>\r\n\r\n<p>Our vision is to build the most trusted home healthcare company in UAE.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CORPORATE VALUES</strong></p>\r\n\r\n<p>Al Safwa Healthcare <strong>(ASH) </strong>is committed to the 7 core values that shape our work ethic and the decisions we make. We seek to touch the lives of others by embracing the following core values:&nbsp;</p>\r\n\r\n<p><strong>A</strong>ccountability -- Accountability breeds responsibility. We are responsible to perform our duties to the best of our ability, in the most efficient and productive way, possible</p>\r\n\r\n<p><strong>L</strong>oyalty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -- we are faithful to our commitments and obligations&nbsp;</p>\r\n\r\n<p><strong>S</strong>atisfaction &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- client satisfaction is our top priority thus we always ensure to meet patients&rsquo; needs and improve the experience of care that they receive</p>\r\n\r\n<p><strong>A</strong>ccessibility&nbsp;&nbsp;&nbsp;&nbsp; -- Access to quality health care services to achieve the best health outcomes and to enhance the quality of life</p>\r\n\r\n<p><strong>F</strong>lexibility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -- This involves being flexible in all areas, within our principles, values and aims. We find the best way to accomplish our goals, thus we look for ways to make changes work</p>\r\n\r\n<p><strong>W</strong>orthiness &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- It is our professional duty to be worthy of the trust that our patients place in us</p>\r\n\r\n<p><strong>A</strong>im&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- We strive for excellence in carrying our mission to effectively serve our clients in providing a full range of home healthcare services</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Al Safwa Healthcare (ASH) </strong>is committed to having a staff of caring professionals that are licensed, certified, bonded and highly trained. The staff works in coordination with a patient&rsquo;s physician to ensure the highest level of care possible. <strong>Al Safwa Healthcare</strong> is the trusted choice for a wide array of medical services that includes <strong>nursing and rehabilitation services</strong>. Home nursing is available <strong>24 hours a day, 7 days a week</strong>. Whether you&rsquo;re recovering from illness, injury, surgery or simply need extra help, we provide the level of care to meet your specific needs and comprehensive services to assist you and your family members through all aspects of healthcare in an efficient and cost-effective manner in the comfort of your home.</p>\r\n\r\n<p>Presently, the following department/staff are involved in rendering (ASH) an optimum standard of Healthcare service to patients and community with quality and care:</p>\r\n\r\n<ul>\r\n	<li>Chief Executive Officer</li>\r\n	<li>Physician</li>\r\n	<li>Homecare Nursing</li>\r\n	<li>Rehabilitation Department</li>\r\n	<li>Manager &ndash; Human Resources</li>\r\n	<li>Accounts Manager and Staff</li>\r\n	<li>Public Relations Officer</li>\r\n	<li>Other staffs</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our company, ASH, has four (4) divisions/ subdivisions namely:</strong></p>\r\n\r\n<ul>\r\n	<li>Medical Director (Physician)</li>\r\n	<li>Nursing Supervisor</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Charge Nurses</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Staff Nurses</p>\r\n\r\n<ul>\r\n	<li>Rehabilitation Director</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Occupational Therapist</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Physiotherapists</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Physiotherapy Aide</p>\r\n\r\n<ul>\r\n	<li>Business Manager</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Coding/Billing Clerk</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Accounting</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HR</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PRO</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Drivers</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintenance/Support Services</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<strong>ASH STAFF NURSES</strong></p>\r\n\r\n<ul>\r\n	<li>ASH provides 24 hours nursing service to Home Nursing clients.&nbsp; All clinicians are HAAD Licensed.&nbsp;</li>\r\n	<li>Competitive nurses</li>\r\n	<li>With experience from different areas (ICU, ER, OR, OB GYNE, NICU, etc.)</li>\r\n	<li>BLS Certified</li>\r\n	<li>Nurses with a sense of professionalism</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>OUR SERVICES</strong></p>\r\n\r\n<p><strong>SKILLED NURSING SERVICES</strong>&nbsp;&nbsp;</p>\r\n\r\n<p>Our skilled nursing services are led by Registered Nurses dedicated to meeting the needs of our patients. Care is coordinated by our physician and is provided in the comfort of the patient&rsquo;s home. Our nurses assess, treat, advice and teach with goal of giving everyone involved the tools needed to manage patient care.</p>\r\n\r\n<ul>\r\n	<li>Nursing Assessment, Evaluation and Management</li>\r\n	<li>Assistance with the activities of daily living</li>\r\n	<li>Home visit for mechanical ventilation care</li>\r\n	<li>Home visit for stoma care and maintenance</li>\r\n	<li>Home visit for intramuscular injections</li>\r\n	<li>Home visit for care and maintenance of urinary catheter</li>\r\n	<li>Home visit for assistance with activities of daily living and personal care</li>\r\n	<li>Home visit for IV infusion/specialty drug administration</li>\r\n	<li>Wound care</li>\r\n	<li>Medical nutrition therapy</li>\r\n	<li>Non emergency transportation</li>\r\n	<li>Palliative Care</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nursing staffs and other auxiliary team are given and supported by on-going training such as:</p>\r\n\r\n<ul>\r\n	<li>Physiotherapy</li>\r\n	<li>Occupational Health</li>\r\n	<li>Infection Control</li>\r\n	<li>Basic Life Support</li>\r\n	<li>Community Nursing Training</li>\r\n</ul>\r\n\r\n<p><strong>REHABILITATION SERVICES</strong></p>\r\n\r\n<p>Rehabilitation in the home allows for continued medical treatment in a comfortable, familiar environment. Our therapist work with physicians to meet the rehabilitation needs of our patients so they can get back on the road of recovery or prevent further regression/complications.</p>\r\n\r\n<p><strong>Physical Therapy</strong></p>\r\n\r\n<ul>\r\n	<li>Balance with gait training</li>\r\n	<li>Physical therapy evaluation and re evaluation</li>\r\n	<li>Muscle Re-education</li>\r\n	<li>Therapeutic&nbsp; exercise</li>\r\n	<li>Prosthetic training for patients with amputation</li>\r\n	<li>Instruction of proper use of assistive device</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Occupational Therapy</strong></p>\r\n\r\n<p>Works with patients to improve fine motor, skills and prepare the patient to resume day to day activities such as:</p>\r\n\r\n<ul>\r\n	<li>Feeding</li>\r\n	<li>Bathing</li>\r\n	<li>Personal hygiene</li>\r\n	<li>Dressing</li>\r\n	<li>Grooming</li>\r\n	<li>Toileting</li>\r\n	<li>Occupational therapy evaluation and re-evaluation</li>\r\n	<li>Home modification adjustment</li>\r\n	<li>Wheelchair management</li>\r\n</ul>\r\n\r\n<p><strong>ASH Physiotherapy Department constitutes of the following: </strong></p>\r\n\r\n<ul>\r\n	<li>Musculoskeletal</li>\r\n	<li>Sports Therapy</li>\r\n	<li>Neurological</li>\r\n	<li>Geriatric (elderly/balance)</li>\r\n	<li>Ergonomics</li>\r\n</ul>','<p>محتوي 2</p>',2,'2017-08-24 11:18:29','2017-08-29 16:12:09',NULL),(3,'test 3333','test 3333','<p><strong>About Us</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>Al Safwa family has always been known for its pioneer role in serving the UAE community and its residents, through providing them with the highest of quality in both service and products.</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>History</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our Company traces its origin back to 2006 when a father, driven by a personal desire for better quality of life for his son (SAFWAT), reached beyond the UAE in search for means to mobilize &amp; make his son independent. Numerous requests from other parents and people with special needs, led to the founding of &ldquo;Al Safwa Mobility (ASM)&rdquo; in January 2007. The company had grown to become the only company in the Middle</p>\r\n\r\n<p>East offering a &ldquo;complete&rdquo; mobility solution.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Company Profile</strong></p>\r\n\r\n<p>Our organization enjoys strategic partnerships with leading manufacturers worldwide. Designed and manufactured by unsurpassed pioneers each in their field our products &amp; services represent the best value for your money. Today, tens of thousands of people worldwide, who would otherwise be limited to their homes, are enjoying a higher quality of life by using our principals&rsquo; equipment. Therapists recommend our products for their medical benefits, and we are driven by the voices and smiles of our customers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mission</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>moving <strong>LIFE</strong> around you...</p>\r\n\r\n<p>Utilizing the latest assistive technology, ASM thrives to change people&rsquo;s lives through providing quality mobility products &amp; solutions. Our team of highly qualified professionals have been trained internationally to provide our clients with the highest quality of education, service &amp; support, to mobilize them wherever the need calls for.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In this case <strong>LIIFE </strong>means:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Better quality of <strong>L</strong>ife</li>\r\n	<li><strong>I</strong>ndependence</li>\r\n	<li><strong>I</strong>nclusion</li>\r\n	<li><strong>F</strong>reedom</li>\r\n	<li><strong>E</strong>asy accessibility</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If we manage to offer this type of mobility, we did not only transport a client, BUT we participated in &ldquo;adding a productive member to the community&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Vision</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>To be the region&rsquo;s leading mobility solutions provider by:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Increasing awareness: Educating Therapists &amp; parents</li>\r\n	<li>Clients&rsquo; loyalty: Offering high end services &amp; customer satisfaction</li>\r\n	<li>Maintaining our pioneer position: Offering a complete solution</li>\r\n	<li>Expanding our solutions: into the Middle East &amp; North Africa</li>\r\n	<li>Eventually being a one stop shop when it comes to rehabilitation</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At ASM, we offer you a world class range of accessibility equipment and solutions that are designed to help you overcome barriers, stay independent and get to wherever you need to go.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>So, if you have the well, we&rsquo;ve got the way...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Name of company: Al Safwa Mobility L.L.C.</p>\r\n\r\n<p>Legal Status of the company</p>\r\n\r\n<p>Limited Liability Company</p>\r\n\r\n<p>Registered Address of the Company</p>\r\n\r\n<p>P.O. Box 110445, Abu Dhabi, United Arab Emirates</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contacts </strong></p>\r\n\r\n<p>Telephone Number: +97125541414</p>\r\n\r\n<p>Telefax Number: +97125541415</p>\r\n\r\n<p>E-mail address: mobility@alsafwa.me</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Commence business: January 2007</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Major Shareholders:Dr.Hisham Safwat Farahat, Owner &amp; President of Al Safwa Mobility L.L.C.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Name of Management Personnel</p>\r\n\r\n<p>Name and Title :Dr. Hisham Safwat Farahat &nbsp;- President</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. Meqdad Mahmoud - General Manager</p>\r\n\r\n<p>&nbsp;</p>','<p>العربية.نت</p>\r\n\r\n<p>أكدت ستاندرد اند بورز تصنيفها الائتماني لاقتصاد قطر عند ‭AA-‬ وعدلت النظرة المستقبلية إلى سلبية،&nbsp;متوقعة أن تفضي المقاطعة التي تفرضها دول عربية ودول أخرى على قطر إلى تباطؤ النمو الاقتصادي وعرقلة الأداء المالي بحسب تقرير صدر عن الوكالة نقلته &quot;رويترز&quot;.</p>\r\n\r\n<h2><strong>فقرة 2</strong></h2>\r\n\r\n<p>وعزت الوكالة النظرة المستقبلية السلبية إلى التداعيات المحتملة للمقاطعة على الاقتصاد والميزانية لكنها أضافت أن التوقعات تشير إلى استمرار السلطات في محاولة إدارة آثار المقاطعة التي تهدد الاقتصاد القطري بمخاطر ستؤثر على التصنيف،&nbsp;وهو ما يتضح من تعديل النظرة من إلى &quot;سلبية&quot;.</p>\r\n\r\n<p>وقالت ستاندرد اند بورز إن التوترات الحالية تضعف التماسك وتزيد من صعوبة التنبؤ بالسياسات وبخاصة بالنسبة لقطر. وقالت &quot;لا نتوقع حاليا أن تغير قطر أو الدول المقاطعة مواقفها&quot;.</p>\r\n\r\n<p>من جانب آخر تحاول البنوك القطرية،&nbsp;معالجة الآثار القاسية على القطاع المالي من جراء المقاطعة الاقتصادية من الدول الأربع السعودية والإمارات والبحرين ومصر،&nbsp;من خلال محاولة إصدار سندات للاقتراض من الخارج وبأسعار ستكون أعلى بسبب رفع درجة المخاطر بعد المقاطعة.</p>\r\n\r\n<h3><strong>فقرة 3</strong></h3>\r\n\r\n<p>ومن الواضح أن البنوك القطرية تحاول الحد من تأثير الأزمة القطرية، بعد نزوح 7.5 مليار دولار من الودائع الأجنبية ، و15 مليار دولار من الودائع والقروض المتبادلة بين البنوك، بحسب بيانات المركزي القطري.</p>\r\n\r\n<p>ويتوقع المحللون فقدان البنوك في الدوحة للمزيد من الودائع ما بين 3 و 4 مليارات دولار في الأشهر القليلة القادمة.</p>\r\n\r\n<p>وهو ما حذرت منه وكالة فيتش في تقريرها، إذ بينت فيتش أن سحوبات الودائع غير المحلية من البنوك القطرية ستؤدي إلى ارتفاع تكلفة التمويل عليها بسبب اشتداد المنافسة على الإيداعات، ما سيضغط على هوامش ربحيتها.</p>',3,'2017-08-24 11:18:29','2017-09-04 23:57:27',NULL);
/*!40000 ALTER TABLE `aboutus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accessory`
--

DROP TABLE IF EXISTS `accessory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accessory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accessory_product_id_foreign` (`product_id`),
  CONSTRAINT `accessory_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accessory`
--

LOCK TABLES `accessory` WRITE;
/*!40000 ALTER TABLE `accessory` DISABLE KEYS */;
INSERT INTO `accessory` VALUES (1,'/uploads/partner1.png','Accessory 1','مستلزمات 1',1,'2017-08-24 12:49:26','2017-08-24 11:18:29','2017-08-24 12:49:26'),(2,'/uploads/partner2.png','Accessory 2','مستلزمات 2',2,'2017-08-24 12:49:29','2017-08-24 11:18:29','2017-08-24 12:49:29'),(3,'/uploads/Mon-Aug-2017_a2b0bc2a7de8d45946fc8e0029fee4bb.jpg','accessory 1','اكسيسورى 1',4,'2017-09-24 15:50:48','2017-08-28 15:57:49','2017-09-24 15:50:48'),(4,'/uploads/Mon-Aug-2017_6ea731d6c11aa3707f06ad42a4ba8fca.jpg','accessory 2','اكسيسورى 2',4,'2017-09-24 15:50:48','2017-08-28 15:58:31','2017-09-24 15:50:48'),(5,'/uploads/Mon-Aug-2017_6ea731d6c11aa3707f06ad42a4ba8fca.jpg','accessory 3','اكسيسورى 3',4,'2017-09-24 15:50:48','2017-08-28 15:58:59','2017-09-24 15:50:48'),(6,'/uploads/Mon-Aug-2017_1279c38e975cf4a12689b4b95fa31a0c.jpg','accessory 4','اكسيسورى 4',4,'2017-09-24 15:50:48','2017-08-28 15:59:25','2017-09-24 15:50:48'),(7,'/uploads/Tue-Aug-2017_2cb79c3a7a70b18e09f2ec54ee270ad6.jpg','8″ Power Seat Elevator Bring the world to your fingertips.','8″ Power Seat Elevator Bring the world to your fingertips.',17,'2017-09-24 15:50:48','2017-08-29 15:40:32','2017-09-24 15:50:48');
/*!40000 ALTER TABLE `accessory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,'Album 1','البوم 1','2017-08-29 15:28:02','2017-08-24 11:18:29','2017-08-29 15:28:02'),(2,'Album 2','البوم 2','2017-08-29 15:27:59','2017-08-24 11:18:29','2017-08-29 15:27:59'),(3,'Employment EXPO','Employment EXPO',NULL,'2017-08-29 15:28:10','2017-08-29 15:28:10'),(4,'ASG Iftar 2017','ASG Iftar 2017',NULL,'2017-08-29 15:28:28','2017-08-29 15:28:28'),(5,'Reha Care Oct 2017','Reha Care Oct 2017',NULL,'2017-08-29 15:28:37','2017-08-29 15:28:37');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `applicant_job_id_foreign` (`job_id`),
  CONSTRAINT `applicant_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicant`
--

LOCK TABLES `applicant` WRITE;
/*!40000 ALTER TABLE `applicant` DISABLE KEYS */;
INSERT INTO `applicant` VALUES (1,'Applicant 1','Applicant1@Applicant.com','0123456789','/uploads/cv1',1,'2017-08-29 16:21:11','2017-08-24 11:18:29','2017-08-29 16:21:11'),(2,'Applicant 2','Applicant2@Applicant.com','0123456789','/uploads/cv2',2,'2017-08-29 16:21:14','2017-08-24 11:18:29','2017-08-29 16:21:14'),(3,'muhammad','dev@kite.com','12345678911','/uploads/Sat-Aug-2017_fdcfffde8c80dee779b8fcc50e9704a5.jpg',3,NULL,'2017-08-26 14:47:15','2017-08-26 14:47:15'),(4,'NotCourses V 1.0','dev@kite.agency','12345678911','/uploads/Sat-Aug-2017_44cea6251d0c05232b5d145a62c56085.png',3,NULL,'2017-08-26 14:48:08','2017-08-26 14:48:08'),(5,'qqqw','qqq@1.com','1111111111111111','/uploads/Tue-Aug-2017_63005a143e39b40e013dea1c1001c88b.docx',3,NULL,'2017-08-29 16:20:52','2017-08-29 16:20:52');
/*!40000 ALTER TABLE `applicant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_ar` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_user_id_foreign` (`user_id`),
  CONSTRAINT `blog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'title 1','عنوان 1','description Blog number 1 english','تفاصيل المصنع رقم 1 بالعربي','/uploads/manu1.png',1,'2017-08-24 14:10:50','2017-08-24 11:18:29','2017-08-24 14:10:50'),(2,'title 2','عنوان 2','description Blog number 1 english','تفاصيل المصنع رقم 2 بالعربي','/uploads/manu2.png',2,'2017-08-24 14:10:54','2017-08-24 11:18:29','2017-08-24 14:10:54'),(3,'Feeling the squeeze? Stop buying brands','Feeling the squeeze? Stop buying brands','Brands are familiar, but often expensive. A new online retailer thinks it can offer shoppers big savings by ditching branded goods altogether.\r\n\r\nBrandless launched last month with a promise to sell only \"brand-free\" products for just $3 an item.\r\n\r\nIts product range includes kitchen knives, olive oil, toilet cleaner and facial moisturizer. The items come in simple packaging with a white label containing key product information.\r\n\r\nAmerican serial entrepreneur Tina Sharkey developed Brandless with co-founder Ido Leffler, raising about $50 million from investors before the website launched.\r\n\r\n<p>Sharkey says they created Brandless to help shoppers avoid the hidden costs of buying a big brand. They even trademarked the term \"BrandTax\" to describe those costs.</p>\r\n\r\n<p><img alt=\"Tina Sharkey and Ido Leffler\" src=\"http://i2.cdn.turner.com/money/dam/assets/170814095022-tina-sharkey-and-ido-leffler-780x439.jpeg\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p>Tina Sharkey and Ido Leffler in front of their Brandless products.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Brandless sources all its products from independent manufacturers and sends them directly to distribution centers. It focuses on natural and organic items at affordable prices.</p>\r\n\r\n<p>It says it can pass on the savings it makes by not having any brick-and-mortar stores.</p>\r\n\r\n<p>\"People are really resonating with the idea that this is affordable, accessible, and the kind of values they want at the prices they can actually afford,\" said Sharkey.</p>\r\n\r\n<p>Brandless shipped to 48 U.S. states in the first week of operation, she added.</p>\r\n\r\n<p>Sharkey estimates consumers will save an average of 40% when buying Brandless products compared to top household brands of a similar quality.</p>\r\n\r\n<p><img alt=\"brandless kitchen gadgets\" src=\"http://i2.cdn.turner.com/money/dam/assets/170814112800-brandless-kitchen-gadgets-780x439.jpg\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p>Brandless markets a large range of kitchen items.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Buying into the brand</p>\r\n\r\n<p>The unbranded concept has been tried before by Japanese retailer MUJI. The name is derived from the term \"Mujirushi Ryohin,\" which translates as \"no brand, quality goods.\"</p>\r\n\r\n<p>MUJI is now a popular brand in its own right.</p>\r\n\r\n<p><img alt=\"brandless blueberry flax granola\" src=\"http://i2.cdn.turner.com/money/dam/assets/170814105909-brandless-blueberry-flax-granola-780x439.jpg\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p>The white labels on Brandless items are designed to be plain and simple.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Whether or not Brandless becomes another big name, Sharkey insists the company is doing something different.</p>\r\n\r\n<p>\"Brands still have this false narrative: cartoons and animated characters that represent them, or actors on television that are riding white horses on beaches, I mean, what is that?\" she said. \"People want the transparency of knowing who they\'re doing business with.\"</p>','Brands are familiar, but often expensive. A new online retailer thinks it can offer shoppers big savings by ditching branded goods altogether.\r\n\r\nBrandless launched last month with a promise to sell only \"brand-free\" products for just $3 an item.\r\n\r\nIts product range includes kitchen knives, olive oil, toilet cleaner and facial moisturizer. The items come in simple packaging with a white label containing key product information.\r\n\r\nAmerican serial entrepreneur Tina Sharkey developed Brandless with co-founder Ido Leffler, raising about $50 million from investors before the website launched.\r\n\r\n<p>Sharkey says they created Brandless to help shoppers avoid the hidden costs of buying a big brand. They even trademarked the term \"BrandTax\" to describe those costs.</p>\r\n\r\n<p><img alt=\"Tina Sharkey and Ido Leffler\" src=\"http://i2.cdn.turner.com/money/dam/assets/170814095022-tina-sharkey-and-ido-leffler-780x439.jpeg\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p>Tina Sharkey and Ido Leffler in front of their Brandless products.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Brandless sources all its products from independent manufacturers and sends them directly to distribution centers. It focuses on natural and organic items at affordable prices.</p>\r\n\r\n<p>It says it can pass on the savings it makes by not having any brick-and-mortar stores.</p>\r\n\r\n<p>\"People are really resonating with the idea that this is affordable, accessible, and the kind of values they want at the prices they can actually afford,\" said Sharkey.</p>\r\n\r\n<p>Brandless shipped to 48 U.S. states in the first week of operation, she added.</p>\r\n\r\n<p>Sharkey estimates consumers will save an average of 40% when buying Brandless products compared to top household brands of a similar quality.</p>\r\n\r\n<p><img alt=\"brandless kitchen gadgets\" src=\"http://i2.cdn.turner.com/money/dam/assets/170814112800-brandless-kitchen-gadgets-780x439.jpg\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p>Brandless markets a large range of kitchen items.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Buying into the brand</p>\r\n\r\n<p>The unbranded concept has been tried before by Japanese retailer MUJI. The name is derived from the term \"Mujirushi Ryohin,\" which translates as \"no brand, quality goods.\"</p>\r\n\r\n<p>MUJI is now a popular brand in its own right.</p>\r\n\r\n<p><img alt=\"brandless blueberry flax granola\" src=\"http://i2.cdn.turner.com/money/dam/assets/170814105909-brandless-blueberry-flax-granola-780x439.jpg\" style=\"height:439px; width:780px\" /></p>\r\n\r\n<p>The white labels on Brandless items are designed to be plain and simple.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Whether or not Brandless becomes another big name, Sharkey insists the company is doing something different.</p>\r\n\r\n<p>\"Brands still have this false narrative: cartoons and animated characters that represent them, or actors on television that are riding white horses on beaches, I mean, what is that?\" she said. \"People want the transparency of knowing who they\'re doing business with.\"</p>','/uploads/Sat-Aug-2017_2cb79c3a7a70b18e09f2ec54ee270ad6.jpg',1,NULL,'2017-08-26 14:42:40','2017-08-29 13:41:31'),(4,'Dear Friends','Dear Friends','<p>Dear Friends,</p>\r\n\r\n<p>Be cheerful</p>\r\n\r\n<p>Be optimistic</p>\r\n\r\n<p>Have faith</p>\r\n\r\n<p>Have hope</p>\r\n\r\n<p>Keep swimming</p>\r\n\r\n<p>Keep moving</p>','<p>Dear Friends,</p>\r\n\r\n<p>Be cheerful</p>\r\n\r\n<p>Be optimistic</p>\r\n\r\n<p>Have faith</p>\r\n\r\n<p>Have hope</p>\r\n\r\n<p>Keep swimming</p>\r\n\r\n<p>Keep moving</p>','/uploads/Tue-Aug-2017_fdcfffde8c80dee779b8fcc50e9704a5.jpg',1,NULL,'2017-08-29 15:52:01','2017-08-29 15:52:01');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `entity_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_entity_id_foreign` (`entity_id`),
  CONSTRAINT `branch_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,'Abu Dhabi - UAE','Abu Dhabi - UAE','Plot C69/C77,M4,Musaffa industrial area - Abu Dhabi - United Arab Emirates','Plot C69/C77,M4,Musaffa industrial area - Abu Dhabi - United Arab Emirates','info@alsafwa.me','+971 2 554 1414',NULL,NULL,NULL,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>',3,NULL,'2017-08-24 11:18:29','2017-09-05 18:14:14'),(2,'Branch 2','فرع 2','Address 2','عنوان 2','email@email.com','012345','012345','012345','012345','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>',1,'2017-08-29 15:58:54','2017-08-24 11:18:29','2017-08-29 15:58:54'),(3,'Branch 2','فرع 2','Address 2','عنوان 2','email@email.com','012345','012345','012345','012345','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>',1,'2017-08-29 15:59:03','2017-08-24 11:18:29','2017-08-29 15:59:03'),(4,'Branch 2','فرع 2','Address 2','عنوان 2','email@email.com','012345','012345','012345','012345','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>',1,'2017-08-29 15:59:00','2017-08-24 11:18:29','2017-08-29 15:59:00'),(5,'Cairo, Egypt','القاهرة، مصر','Plot C69/C77,M4,Musaffa industrial area - Abu Dhabi - United Arab Emirates','Plot C69/C77,M4,Musaffa industrial area - Abu Dhabi - United Arab Emirates','dev@kite.agency','+971 2 554 1414',NULL,NULL,NULL,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>',3,NULL,'2017-09-05 18:13:21','2017-09-05 18:13:21'),(6,'Cairo, Egypt','القاهرة، مصر','Plot C69/C77,M4,Musaffa industrial area - Abu Dhabi - United Arab Emirates','Plot C69/C77,M4,Musaffa industrial area - Abu Dhabi - United Arab Emirates','dev@kite.agency','+971 2 554 1414',NULL,NULL,NULL,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>',3,NULL,'2017-09-05 18:13:42','2017-09-05 18:13:42');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'City 1','مدينة 1','2017-08-29 15:42:13','2017-08-24 11:18:29','2017-08-29 15:42:13'),(2,'City 2','مدينة 2','2017-08-29 15:42:23','2017-08-24 11:18:29','2017-08-29 15:42:23'),(3,'Saudia Arabia','Saudia Arabia','2017-08-29 15:42:29','2017-08-29 15:38:08','2017-08-29 15:42:29'),(4,'UAE','UAE',NULL,'2017-08-29 15:43:05','2017-08-29 15:43:05'),(5,'Egypt','Egypt',NULL,'2017-08-29 15:43:26','2017-08-29 15:43:43'),(6,'Bahrain','Bahrain',NULL,'2017-08-29 15:44:11','2017-08-29 15:44:11'),(7,'Oman','Oman',NULL,'2017-08-29 15:45:06','2017-08-29 15:45:06'),(8,'Kuwait','Kuwait',NULL,'2017-08-29 15:45:25','2017-08-29 15:45:25'),(9,'Qatar','Qatar',NULL,'2017-08-29 15:45:40','2017-08-29 15:45:40'),(10,'Saudi Arabia','Saudi Arabia',NULL,'2017-08-29 15:46:06','2017-08-29 15:46:06');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_entity_id_foreign` (`entity_id`),
  CONSTRAINT `contact_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'name 1','الاسم 1','01118763129','safwa@safwa.com','/uploads/Tue-Aug-2017_3911a89c9a9f9c5383e63991ad719e6a.jpg','position 1','مكان 1',3,'2017-08-24 11:18:29','2017-08-29 15:56:14',NULL),(2,'name 2','الاسم 2','01118763129','safwa@safwa.com','/uploads/partner2.png','position 2','مكان 1',2,'2017-08-24 11:18:29','2017-08-24 11:18:29',NULL),(3,'name 2','الاسم 2','01118763129','safwa@safwa.com','/uploads/partner2.png','position 2','مكان 1',2,'2017-08-24 11:18:29','2017-08-24 11:18:29',NULL),(4,'name 2','الاسم 2','01118763129','safwa@safwa.com','/uploads/partner2.png','position 2','مكان 1',2,'2017-08-24 11:18:29','2017-08-24 11:18:29',NULL);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci,
  `entity_id` int(10) unsigned NOT NULL,
  `team_id` int(10) unsigned NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `how` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namehow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disabiltytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contactus_entity_id_foreign` (`entity_id`),
  KEY `contactus_team_id_foreign` (`team_id`),
  KEY `contactus_city_id_foreign` (`city_id`),
  CONSTRAINT `contactus_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `contactus_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `contactus_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` VALUES (1,'test','1@1.com','12345678911','test mail 1',3,1,1,'2017-08-26 14:45:49','2017-08-26 14:45:49',NULL,NULL,NULL,NULL,NULL,NULL),(2,'Mohamed salah 2','m.alsayed.salah@gmail.com','01097465056',NULL,3,1,4,'2017-09-06 20:51:11','2017-09-06 20:51:11',NULL,'1',NULL,'mo','120','120'),(3,'mohamed alsayed','m.alsayed.salah@gmail.com','01097465056',NULL,3,1,4,'2017-09-09 19:09:19','2017-09-09 19:09:19',NULL,'1',NULL,'12','120','12');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currency` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currency`
--

LOCK TABLES `currency` WRITE;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
INSERT INTO `currency` VALUES (1,'USD',NULL,'2017-08-24 11:18:29','2017-08-24 12:50:11'),(2,'EGP',NULL,'2017-08-24 11:18:29','2017-08-24 12:50:18');
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity`
--

DROP TABLE IF EXISTS `entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity`
--

LOCK TABLES `entity` WRITE;
/*!40000 ALTER TABLE `entity` DISABLE KEYS */;
INSERT INTO `entity` VALUES (1,'Auto Clinic','2017-08-24 11:18:29','2017-08-24 11:18:29',NULL),(2,'Health Care','2017-08-24 11:18:29','2017-08-24 11:18:29',NULL),(3,'Mobility','2017-08-24 11:18:29','2017-08-24 11:18:29',NULL);
/*!40000 ALTER TABLE `entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_ar` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eventcate_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_eventcate_id_foreign` (`eventcate_id`),
  CONSTRAINT `event_eventcate_id_foreign` FOREIGN KEY (`eventcate_id`) REFERENCES `event_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'Rehacare Exhibition','معرض','<p>Rehacare Exhibition is for a self-determined living for the disabled people. It takes place in Zurich, Germany.</p>','<p>للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من &quot;حول أقاصي الخير والشر&quot; (de Finibus Bonorum et Malorum) لمؤلفه شيشيرون (Cicero) بصيغها الأصلية، مرفقة بالنسخ الإنكليزية لها والتي قام بترجمتها هـ.راكهام (H. Rackham) في عام 1914.</p>','/uploads/Tue-Aug-2017_912912d6b5df930dc5c05f99bb690793.jpg','2016-10-10','01:00PM','Germany',1,NULL,'2017-08-24 14:15:53','2017-08-29 16:23:55'),(2,'ASG Iftar Ramadan 2017','افطار رمضان 2017','<p>Iftar for all the teams</p>','<p>افطار فريق العمل</p>','/uploads/Tue-Aug-2017_5f2c7b39f895bc51262e4335a80be181.jpg','2017-06-22','05:00PM','Abu Dhabi',1,NULL,'2017-08-24 14:19:13','2017-08-29 16:24:23'),(3,'test 1','test 222','<p>test</p>','<p>test</p>','/uploads/Tue-Sep-2017_a8299a60420f92158d738ae8c13d401b.png','2017-01-10','02:00PM','Cairo',1,NULL,'2017-09-05 14:10:31','2017-09-05 14:10:31');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_category`
--

DROP TABLE IF EXISTS `event_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_category`
--

LOCK TABLES `event_category` WRITE;
/*!40000 ALTER TABLE `event_category` DISABLE KEYS */;
INSERT INTO `event_category` VALUES (1,'Event_category 1','فئه 1',NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29'),(2,'Event_category 2','فئه 2',NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29');
/*!40000 ALTER TABLE `event_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_ar` text COLLATE utf8mb4_unicode_ci,
  `entity_id` int(10) unsigned NOT NULL,
  `jobcat_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `job_entity_id_foreign` (`entity_id`),
  KEY `job_jobcat_id_foreign` (`jobcat_id`),
  CONSTRAINT `job_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `job_jobcat_id_foreign` FOREIGN KEY (`jobcat_id`) REFERENCES `job_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (1,'title 1','عنوان 1','description Job number 1 english','تفاصيل المصنع رقم 1 بالعربي',1,1,'2017-08-24 14:20:14','2017-08-24 11:18:29','2017-08-24 14:20:14',1,''),(2,'title 2','عنوان 2','description Job number 2 english','تفاصيل المصنع رقم 2 بالعربي',2,2,'2017-08-24 14:20:19','2017-08-24 11:18:29','2017-08-24 14:20:19',0,''),(3,'HR Manager','مدير الموارد البشرية','<p>At the core of Microsoft is the Office Product Group (OPG). The tools the World uses to drive productivity are created, maintained and grown in OPG.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The OPG HR team is looking for an HR Manager looking to take the next step in their career. In this role, you will partner with clients who are changing the world every day.&nbsp; You will drive execution of the HR Plan and will be accountable for: &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Understanding the business.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Understanding the people priorities while collaborating with the leadership team. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Identifying key business changes impacting the organization, and partnering with both HR and business leader on recommendations for addressing. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Partnering and coaching managers and leaders to facilitate organizational and cultural change. Educating the business on HR trends that affect the business. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Successfully executing against our People Plan through the HR rhythm of the business activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Implementing HR strategies in alignment with both business and HR functional objectives; examples may include diversity programs and critical talent retention programs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Building management capability to facilitate an open, inclusive, Microsoft Values-based environment that enables effective employee relations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ensuring role is perceived as an objective employee resource and escalation path for unresolved issues.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Developing change management and communication plans. &nbsp;&nbsp;</p>\r\n\r\n<h2>Responsibilities</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Skills and Qualifications:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Demonstrated business acumen and people acumen, and ability to influence business leaders at an executive level</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ability to manage HR Programs in a complex business environment</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Strong communications and collaboration skills</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ability to partner across HR to deliver effective business solutions</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Experience with delivery of HR ROB&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Qualifications</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Education and Experience:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Education Level Required - BS/BA degree required, MBA or an advanced degree in HR preferred</p>\r\n\r\n<p>Years of Experience Required 5+ years of relevant Human Resources work experience</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Microsoft is an equal opportunity employer. All qualified applicants will receive consideration for employment without regard to age, ancestry, color, family or medical care leave, gender identity or expression, genetic information, marital status, medical condition, national origin, physical or mental disability, political affiliation, protected veteran status, race, religion, sex (including pregnancy), sexual orientation, or any other characteristic protected by applicable laws, regulations and ordinances. We also consider qualified applicants regardless of criminal histories, consistent with legal requirements. If you need assistance and/or a reasonable accommodation due to a disability during the application or the recruiting process, please send a request to <a href=\"mailto:askstaff@microsoft.com\" target=\"_blank\">askstaff@microsoft.com</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Benefits and Perks</h3>\r\n\r\n<ul>\r\n	<li>Industry leading healthcare</li>\r\n	<li>Maternity and paternity leave</li>\r\n	<li>Savings and investments</li>\r\n	<li>Opportunities to network and connect</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Giving programs</li>\r\n	<li>Discounts on products and services</li>\r\n	<li>Educational resources</li>\r\n	<li>Generous time away</li>\r\n</ul>','<p>At the core of Microsoft is the Office Product Group (OPG). The tools the World uses to drive productivity are created, maintained and grown in OPG.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The OPG HR team is looking for an HR Manager looking to take the next step in their career. In this role, you will partner with clients who are changing the world every day.&nbsp; You will drive execution of the HR Plan and will be accountable for: &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Understanding the business.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Understanding the people priorities while collaborating with the leadership team. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Identifying key business changes impacting the organization, and partnering with both HR and business leader on recommendations for addressing. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Partnering and coaching managers and leaders to facilitate organizational and cultural change. Educating the business on HR trends that affect the business. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Successfully executing against our People Plan through the HR rhythm of the business activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Implementing HR strategies in alignment with both business and HR functional objectives; examples may include diversity programs and critical talent retention programs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Building management capability to facilitate an open, inclusive, Microsoft Values-based environment that enables effective employee relations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ensuring role is perceived as an objective employee resource and escalation path for unresolved issues.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Developing change management and communication plans. &nbsp;&nbsp;</p>\r\n\r\n<h2>Responsibilities</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Skills and Qualifications:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Demonstrated business acumen and people acumen, and ability to influence business leaders at an executive level</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ability to manage HR Programs in a complex business environment</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Strong communications and collaboration skills</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ability to partner across HR to deliver effective business solutions</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Experience with delivery of HR ROB&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Qualifications</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Education and Experience:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Education Level Required - BS/BA degree required, MBA or an advanced degree in HR preferred</p>\r\n\r\n<p>Years of Experience Required 5+ years of relevant Human Resources work experience</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Microsoft is an equal opportunity employer. All qualified applicants will receive consideration for employment without regard to age, ancestry, color, family or medical care leave, gender identity or expression, genetic information, marital status, medical condition, national origin, physical or mental disability, political affiliation, protected veteran status, race, religion, sex (including pregnancy), sexual orientation, or any other characteristic protected by applicable laws, regulations and ordinances. We also consider qualified applicants regardless of criminal histories, consistent with legal requirements. If you need assistance and/or a reasonable accommodation due to a disability during the application or the recruiting process, please send a request to <a href=\"mailto:askstaff@microsoft.com\" target=\"_blank\">askstaff@microsoft.com</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Benefits and Perks</h3>\r\n\r\n<ul>\r\n	<li>Industry leading healthcare</li>\r\n	<li>Maternity and paternity leave</li>\r\n	<li>Savings and investments</li>\r\n	<li>Opportunities to network and connect</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Giving programs</li>\r\n	<li>Discounts on products and services</li>\r\n	<li>Educational resources</li>\r\n	<li>Generous time away</li>\r\n</ul>',3,1,NULL,'2017-08-24 14:25:03','2017-08-28 14:23:03',0,'Canada'),(4,'CFO','مدير','<p>Description&nbsp;</p>','<p>تفاصيل&nbsp;</p>',3,1,NULL,'2017-08-28 15:27:06','2017-08-28 15:27:06',0,'UAE'),(5,'Doctor','دكتور','<p>Description</p>','<p>تفاصيل&nbsp;</p>',3,1,'2017-08-28 15:39:33','2017-08-28 15:39:11','2017-08-28 15:39:33',0,'UAE');
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_category`
--

DROP TABLE IF EXISTS `job_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_category`
--

LOCK TABLES `job_category` WRITE;
/*!40000 ALTER TABLE `job_category` DISABLE KEYS */;
INSERT INTO `job_category` VALUES (1,'Job_category 1','فئه 1',NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29'),(2,'Job_category 2','فئه 2',NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29');
/*!40000 ALTER TABLE `job_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacture`
--

DROP TABLE IF EXISTS `manufacture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_ar` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacture`
--

LOCK TABLES `manufacture` WRITE;
/*!40000 ALTER TABLE `manufacture` DISABLE KEYS */;
INSERT INTO `manufacture` VALUES (1,'manufacturer 1','مصنع 1','description manufacturer number 1 english','تفاصيل المصنع رقم 1 بالعربي','/uploads/manu1.png','2017-08-24 12:49:26','2017-08-24 11:18:29','2017-08-24 12:49:26'),(2,'manufacturer 2','مصنع 2','description manufacturer number 2 english','تفاصيل المصنع رقم 2 بالعربي','/uploads/manu2.png','2017-08-24 12:49:29','2017-08-24 11:18:29','2017-08-24 12:49:29'),(3,'BRUNO','برونو','<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>','<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>','/uploads/Thu-Aug-2017_57bf6f91d4307ddacba9a0a6f5881302.png',NULL,'2017-08-24 12:52:50','2017-09-27 13:08:40'),(4,'Autoadapt','اوتو ادابت','<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>','<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>','/uploads/Thu-Aug-2017_a4c127f152e6fe057cef1ee5b78d814b.jpg',NULL,'2017-08-24 13:19:06','2017-08-24 13:19:06'),(5,'Permobil','بيرموبيل','<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>','<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>','/uploads/Mon-Sep-2017_12d8fa106c976377cbbdc694bfcf6a63.jpg',NULL,'2017-08-24 13:22:10','2017-09-27 15:11:38'),(6,'AcessREC','أكسيس ريك','<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>','<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>','/uploads/Thu-Aug-2017_f6a02294bd2f5900a2ce84d38d3617f4.jpg',NULL,'2017-08-24 13:23:04','2017-09-27 15:12:01'),(7,'Pride Mobility','برايد موبيليتى','<p>Pride Mobility</p>','<p>Pride Mobility</p>','/uploads/Mon-Sep-2017_d9541a34301fc62af07e0db9b9150cc3.jpg',NULL,'2017-09-25 16:42:33','2017-09-25 16:42:33'),(8,'Feal','فيال','<p>Portable ramp</p>\r\n\r\n<p>Fixed, folding or telescopic. Our portable ramps are available in a variety of different shapes and sizes.They&rsquo;re easy to bring along on trips or to places that do not have fixed ramps. Features include handles that retract effortlessly, Simple locks that you can open and close in one easy step, and superior slip resistance.</p>','<p>MM</p>','/uploads/Mon-Sep-2017_72acded3acd45e4c8b6ed680854b8ab1.jpg',NULL,'2017-09-25 17:34:30','2017-09-27 15:08:38'),(9,'Convaid','كونفيد','<p>dfhjhwr</p>','<p>ياسفقعت6صقع56ه</p>','/uploads/Wed-Sep-2017_e3132b484e1faad9a3ecde747594c08e.jpg',NULL,'2017-09-27 13:13:20','2017-09-27 13:13:20'),(10,'Magic Mobility','ماجيك','<p>fxdbsnjtyjytjty</p>','<p>لاشثفافققفعضفقصع</p>','/uploads/Wed-Sep-2017_64b4cad0c2021962a5737ec97483c7aa.jpg',NULL,'2017-09-27 13:37:46','2017-09-27 13:37:46'),(11,'LifeStand','لايف ستاند',NULL,NULL,'/uploads/Wed-Sep-2017_c36aed136f1beb545e243ab92fd3c522.jpg',NULL,'2017-09-27 15:06:26','2017-09-27 15:10:32'),(12,'Tilite','Tilite','<p><strong>Imagine a wheelchair built just for you.</strong></p>\r\n\r\n<p>Not just one or two adjustments. But every single component, selected, measured, cut and assembled to fit you. From the lightest, strongest metals around. It&rsquo;d be stronger. Lighter. More comfortable. Easier to push. Easier to stop. Easier to load. Easier to store.</p>\r\n\r\n<p>That&rsquo;s the idea behind TiLite &ndash; and it&rsquo;s all part of our exclusive process called TiFit.</p>','<p>تخيل ان يكون كرسيك قد تم تصنعه خصصا لك . حيث ان كل جزئية من الكرسي قد تم اختيارها وقياسها وتصنيعها لك. االكرسي تم بناءه من أقوى واخف معدم موجودز فيجب ان يكون الاخف والاقوى والاكثر راحة على الاطلاق. زيجب ان يكون الاسهل للدفع والاسهل الاقاف والاسهل للتحميل والاسهل للتخزين&nbsp;</p>\r\n\r\n<p>انه كرسي تاليت وهذه هي الفكرة خلف هذا الكرسي ... حيث انه يعتبر معيار حصري لنا اسمه TiFit</p>','/uploads/Thu-Sep-2017_ccc6d13845323b87d08fac997f069109.png',NULL,'2017-09-28 04:26:30','2017-09-28 04:28:08'),(13,'Anatomic Sitt','Anatomic Sitt',NULL,NULL,'/uploads/Thu-Sep-2017_7ced3b019b5593d3417ade43ebf8cd81.pdf',NULL,'2017-09-28 04:35:16','2017-09-28 04:35:16'),(14,'Easy Stand','Say Stand','<p>A durable medical equipment manufacturer based in Morton, Minnesota, we design and develop standing devices that support the body in a standing position. Simply designing a stander was not enough. We strive to perfect all of our standing equipment and products and have turned to our valuable customers in doing so. Standing is all we do &ndash; and we offer the widest array of standing equipment in a variety of sizes and options, including the unique &ldquo;Active Standing&rdquo; Glider and the only true multi-position stander, the EasyStand Zing MPS.</p>',NULL,NULL,NULL,'2017-09-28 04:45:28','2017-09-28 04:45:28'),(15,'Timoteos','Timoteos',NULL,'<p>Well supported, adaptive standing and seating both play an important part in physical rehabilitation and preventing postural distortion.With carefully designed adjustable supports, adapting to a wide range of physical and physiological demands, a comfortable position is easy to find.</p>\r\n\r\n<p>&nbsp;</p>',NULL,NULL,'2017-09-28 04:54:08','2017-09-28 04:54:08');
/*!40000 ALTER TABLE `manufacture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_album_id_foreign` (`album_id`),
  CONSTRAINT `media_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'title 1','عنوان 1',1,'https://www.youtube.com/embed/17mShYqFfOs',1,'2017-08-29 15:28:02','2017-08-24 11:18:29','2017-08-29 15:28:02'),(2,'title 1','عنوان 1',1,'https://www.youtube.com/embed/17mShYqFfOs',1,'2017-08-29 15:28:02','2017-08-24 11:18:29','2017-08-29 15:28:02'),(3,'title 2','عنوان 2',1,'https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM',2,'2017-08-29 15:27:59','2017-08-24 11:18:29','2017-08-29 15:27:59'),(4,'title 2','عنوان 2',1,'https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM',2,'2017-08-29 15:27:59','2017-08-24 11:18:29','2017-08-29 15:27:59'),(5,'title 2','عنوان 2',0,'/uploads/partner1.png',2,'2017-08-29 15:27:59','2017-08-24 11:18:29','2017-08-29 15:27:59'),(6,'title 2','عنوان 2',0,'/uploads/partner1.png',2,'2017-08-29 15:27:59','2017-08-24 11:18:29','2017-08-29 15:27:59'),(7,'title 2','عنوان 2',0,'/uploads/partner2.png',1,'2017-08-29 15:28:02','2017-08-24 11:18:29','2017-08-29 15:28:02'),(8,'title 2','عنوان 2',0,'/uploads/partner2.png',1,'2017-08-29 15:28:02','2017-08-24 11:18:29','2017-08-29 15:28:02'),(9,'1','1',0,'/uploads/Tue-Aug-2017_5a8735339d1cb611d78741451e2415ea.jpg',3,NULL,'2017-08-29 15:29:51','2017-08-29 15:29:51'),(10,'2','2',0,'/uploads/Tue-Aug-2017_7d4c7b7c6cf7dda495c86f11e0a57d03.jpg',3,NULL,'2017-08-29 15:31:35','2017-08-29 15:31:35'),(11,'11','11',1,'https://www.youtube.com/watch?v=Z7s1IAswW4Y',3,NULL,'2017-09-04 23:44:52','2017-09-04 23:44:52'),(12,'1','3',1,'https://www.youtube.com/watch?v=Z7s1IAswW4Y',3,NULL,'2017-09-04 23:45:04','2017-09-04 23:45:04');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_08_12_131039_create_manufacturer_table',1),(4,'2017_08_12_142037_create_partners_table',1),(5,'2017_08_13_113201_create_Entity_table',1),(6,'2017_08_13_114133_create_aboutus_table',1),(7,'2017_08_13_122335_create_Album_table',1),(8,'2017_08_13_123059_create_Media_table',1),(9,'2017_08_13_124108_create_Slider_table',1),(10,'2017_08_13_125931_create_Team_table',1),(11,'2017_08_13_130755_create_Contact_table',1),(12,'2017_08_13_131901_create_Blog_table',1),(13,'2017_08_13_133855_create_Job_category_table',1),(14,'2017_08_13_134417_create_Job_table',1),(15,'2017_08_13_140946_create_Applicant_table',1),(16,'2017_08_13_143237_create_Product_category_table',1),(17,'2017_08_13_144732_create_Currency_table',1),(18,'2017_08_13_144804_create_Product_table',1),(19,'2017_08_13_151206_create_Product_images_table',1),(20,'2017_08_13_152225_create_Product_documents_table',1),(21,'2017_08_13_153227_create_accessory_table',1),(22,'2017_08_13_154546_create_City_table',1),(23,'2017_08_13_155026_create_Branch_table',1),(24,'2017_08_13_160025_create_Event_category_table',1),(25,'2017_08_13_160557_create_Event_table',1),(26,'2017_08_17_142543_create_contactus_table',1),(27,'2017_08_21_153129_add_flag_to_job_table',1),(28,'2017_08_23_163424_create_product_entity_table',1),(29,'2017_08_27_000439_add_location_to_job',2),(30,'2017_09_06_153845_add_order_to_product_category',3),(31,'2017_09_06_200957_create_add_to_contactus_table',4),(32,'2017_09_14_122901_create_services_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'partners 1','شريك 1','/uploads/partner1.png','2017-08-24 12:49:35','2017-08-24 11:18:29','2017-08-24 12:49:35'),(2,'partners 2','شريك 2','/uploads/partner2.png','2017-08-24 12:49:38','2017-08-24 11:18:29','2017-08-24 12:49:38'),(3,'Emirates Transport','مواصلات الامارات','/uploads/Thu-Aug-2017_1d9d2f437cda21190dff8b2a9f87e28f.jpg',NULL,'2017-08-24 13:26:38','2017-08-24 13:26:38'),(4,'Alfahim','الفهيم','/uploads/Thu-Aug-2017_530b85bf1195404b5bc585847a930acf.png',NULL,'2017-08-24 13:27:14','2017-08-24 13:27:14'),(5,'AL Dar Academies','اكاديمية الدار','/uploads/Thu-Aug-2017_4d3806028cf4815f33ddbef950e2c1dd.jpg',NULL,'2017-08-24 13:29:28','2017-08-24 13:29:28'),(6,'FCA','اف سي ايه','/uploads/Thu-Aug-2017_3a78536993c524a2833fc27c78b47f83.png',NULL,'2017-08-24 13:31:29','2017-08-24 13:31:29'),(7,'Mercedes-Benz','مرسيدس بنز','/uploads/Thu-Aug-2017_a3d784449dd6f220e9c7e5caa539d8d1.png',NULL,'2017-08-24 13:36:47','2017-08-24 13:36:47'),(8,'Provita','بروفيتا','/uploads/Thu-Aug-2017_b2c81a33dfc03341f6956c5c82cce8c6.png',NULL,'2017-08-24 13:38:14','2017-08-24 13:38:14'),(9,'Premier Motors','برمير موتورز','/uploads/Thu-Aug-2017_3eb41c38c9dfc5b71aa54d102ac00a50.png',NULL,'2017-08-24 13:40:56','2017-08-24 13:40:56'),(10,'SHC','اس اتش سي','/uploads/Thu-Aug-2017_887c199de8fa53b097f89909b7c008d9.png',NULL,'2017-08-24 13:41:42','2017-08-24 13:41:42'),(11,'Zayed Higher Organisation','مؤسسة زايد','/uploads/Thu-Aug-2017_403aa12bc5cdb1d25af475098c4dccf4.png',NULL,'2017-08-24 13:42:35','2017-08-24 13:42:35');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullcontent_en` text COLLATE utf8mb4_unicode_ci,
  `fullcontent_ar` text COLLATE utf8mb4_unicode_ci,
  `shortcontent_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcontent_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer_id` int(10) unsigned NOT NULL,
  `currency_id` int(10) unsigned NOT NULL,
  `catproduct_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_manufacturer_id_foreign` (`manufacturer_id`),
  KEY `product_currency_id_foreign` (`currency_id`),
  KEY `product_catproduct_id_foreign` (`catproduct_id`),
  CONSTRAINT `product_catproduct_id_foreign` FOREIGN KEY (`catproduct_id`) REFERENCES `product_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `product_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `product_manufacturer_id_foreign` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Product 1','منتج 1','Product1 content','محتوي منتج 1','Product1 short content','محتوي منتج 1','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM\" frameborder=\"0\" allowfullscreen></iframe>','150','model 1','موديل 1','/uploads/partner1.png',1,1,1,'2017-08-24 12:49:26','2017-08-24 11:18:29','2017-08-24 12:49:26'),(2,'Product 2','منتج 2','Product2 content','محتوي منتج 2','Product2 short content','محتوي منتج 2','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM\" frameborder=\"0\" allowfullscreen></iframe>','260','model 2','موديل 2','/uploads/partner1.png',2,2,2,'2017-08-24 12:49:29','2017-08-24 11:18:29','2017-08-24 12:49:29'),(3,'Access MAT','اكسيس مات','<p>AccessMat&reg;is a light weight and durable 100% polyester roll out matting system specifically developed to create a permanent or temporary route for individuals of all abilities (pedestrians and wheelchair users). AccessMat&reg; is quick to install and remove. It enables you to easily create a safe and comfortable pathway, visible to all. Available in different widths and lengths that are connectable. AccessMat&reg; enables safe traffic on sand, snow and grass.</p>','<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>','Mat for beaches','مات للشواطىء','https://www.youtube.com/embed/6OCRkOTyNwk','0',NULL,NULL,'/uploads/Mon-Sep-2017_946d5ef4589bee5cb6f21d9274029bfe.jpg',6,1,6,'2017-09-24 15:50:08','2017-08-24 13:49:43','2017-09-24 15:50:08'),(4,'AccessRec Water Wheels','ووتر وويلز','<p>WaterWheels&reg;is a floating beach wheelchair which enables people with disabilities to access soft terrains (sand, grass, snow, gravels, etc.).Thanks to its floating armrests and over sized wheels, users of WaterWheels&reg;can also safely float in water.The safety harness of the WaterWheels&reg; secures its passengers when moving from sand to water. The disabled community can now enjoy the beach,ocean,lakes,waterparks &amp; pools with the reliability &amp; comfort of WaterWheels&reg;.WaterWheels&reg; is composed of 6 different parts: the frame, 2 armrests and 3 big wheels, and is easily assembled and disassembled in less than a minute without any tools! WaterWheels&reg; is perfect for all wheelchair users and those with special needs.</p>','<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام &quot;هنا يوجد محتوى نصي، هنا يوجد محتوى نصي&quot; فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال &quot;lorem ipsum&quot; في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>','Floating beach wheelchair','Floating beach wheelchair','https://www.youtube.com/watch?v=Pl00yaRmwao','10500','mm','mm','/uploads/Thu-Aug-2017_daf6b8e02b3ee293de20989105ed4ac9.jpg',6,1,15,'2017-09-24 15:50:48','2017-08-24 13:57:32','2017-09-24 15:50:48'),(5,'Bruno','برونو','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>','<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>','Outdoor curved lifts','Outdoor curved lifts',NULL,'0',NULL,NULL,'/uploads/Mon-Aug-2017_f3c54acf27b2b24c9b264a00600c6802.png',3,1,7,'2017-09-24 15:50:14','2017-08-28 15:50:45','2017-09-24 15:50:14'),(6,'C350','C350','<p>The C350Corpus 3G.<br />\r\nA class of its own<br />\r\nBuilding on the success of the C300 series Permobil presents the rear-wheel driven C350 3G. The C350 3G has a low seat height of 460 mm from seat to ground and reaches speeds of up to 10 km/hour. Available in a range of colours that make this wheelchair a real eye catcher.The C350 is supplied as standard with compatible three-spoke hubcaps.With the Corpus seating system you can tilt your seat and raise it by up to 200 mm. The C350 Corpus 3G offers almost infinite possibilities for customization of the seating system with easy adjustment of the depth, width, height and angle of several seating components. The popular Corpus seating system, with its four powered adjustable settings, will ergonomically meet all your wishes.The C350 Corpus is also one of the few eight-wheel drive wheelchairs in which the leg supports can reach a knee angle of 90o as standard.</p>\r\n\r\n<p>Model Highlights<br />\r\nMaximum user weight 136 kg<br />\r\nRange 30-35 km<br />\r\nMaximum speed 10 km/h<br />\r\nObstacle height 70-80 mm<br />\r\nTurning radius 945 mm<br />\r\nCrash tested</p>','<p>The C350Corpus 3G.<br />\r\nA class of its own<br />\r\nBuilding on the success of the C300 series Permobil presents the rear-wheel driven C350 3G. The C350 3G has a low seat height of 460 mm from seat to ground and reaches speeds of up to 10 km/hour. Available in a range of colours that make this wheelchair a real eye catcher.The C350 is supplied as standard with compatible three-spoke hubcaps.With the Corpus seating system you can tilt your seat and raise it by up to 200 mm. The C350 Corpus 3G offers almost infinite possibilities for customization of the seating system with easy adjustment of the depth, width, height and angle of several seating components. The popular Corpus seating system, with its four powered adjustable settings, will ergonomically meet all your wishes.The C350 Corpus is also one of the few eight-wheel drive wheelchairs in which the leg supports can reach a knee angle of 90o as standard.</p>\r\n\r\n<p>Model Highlights<br />\r\nMaximum user weight 136 kg<br />\r\nRange 30-35 km<br />\r\nMaximum speed 10 km/h<br />\r\nObstacle height 70-80 mm<br />\r\nTurning radius 945 mm<br />\r\nCrash tested</p>',NULL,NULL,NULL,'0',NULL,NULL,'/uploads/Mon-Aug-2017_428171b7d052a1dd11f2aef5cec1e502.jpg',5,1,11,'2017-09-24 15:50:48','2017-08-28 15:52:46','2017-09-24 15:50:48'),(7,'Carolift','Carolift','<p>Carolift 6900, right .The Carolift 6900 is a wheelchair hoist designed to lift mobility devices weighing up to 181 kg into the boot of a vehicle. The offset arm gives the hoist the ability to reach around to the side of the vehicle to pick up a wheelchair from the pavement. ..The Carolift 6900 has powered swivel and lift, operated via a hand-held control. It also features a telescopic arm that assists in bypassing narrow door openings or wide bumpers. To achieve a perfect fit the Carolift 6900 can be cut in both height and length upon installation.</p>','<p>Carolift 6900, right .The Carolift 6900 is a wheelchair hoist designed to lift mobility devices weighing up to 181 kg into the boot of a vehicle. The offset arm gives the hoist the ability to reach around to the side of the vehicle to pick up a wheelchair from the pavement. ..The Carolift 6900 has powered swivel and lift, operated via a hand-held control. It also features a telescopic arm that assists in bypassing narrow door openings or wide bumpers. To achieve a perfect fit the Carolift 6900 can be cut in both height and length upon installation.</p>','Wheelchair Hoist','Wheelchair Hoist',NULL,'0','6900','6900','/uploads/Mon-Aug-2017_a353b048c4bf8c87272e5e3b40b6e413.png',4,1,16,'2017-09-24 15:51:10','2017-08-28 16:02:44','2017-09-24 15:51:10'),(8,'Carony Classic 24','Carony Classic 24','<p>Carony Classic 24&quot; Standard, right, Compact seat. The Carony Classic is a wheelchair that lets the user stay seated while transferring to the car seat. By docking the wheelchair to either a swivel seat or seat lift, the wheelchair seat can be slid off its base and onto the docking plate where the seat locks safely in place and becomes the car seat. In short, a user can move from wheelchair to car seat and vice versa completely without lifting. Available with 12&rdquo; or 24&rdquo; wheels and suitable for people of all sizes including those of short stature and children.</p>','<p>Carony Classic 24&quot; Standard, right, Compact seat. The Carony Classic is a wheelchair that lets the user stay seated while transferring to the car seat. By docking the wheelchair to either a swivel seat or seat lift, the wheelchair seat can be slid off its base and onto the docking plate where the seat locks safely in place and becomes the car seat. In short, a user can move from wheelchair to car seat and vice versa completely without lifting. Available with 12&rdquo; or 24&rdquo; wheels and suitable for people of all sizes including those of short stature and children.</p>','Car Seat Transfer','Car Seat Transfer',NULL,'0','11','11','/uploads/Mon-Aug-2017_b126e85b594e8ea62a97262fe9510ccf.jpg',4,1,12,'2017-09-24 15:50:53','2017-08-28 16:05:44','2017-09-24 15:50:53'),(9,'Carony GO','Carony GO','<p>Carony Go,<br />\r\nright. The Carony Go is a powered wheelchair that lets you stay seated while transferring to the car seat. By docking the wheelchair to either a swivel seat or seat lift, the wheelchair seat can be slid off its base and onto the docking plate where the seat locks safely in<br />\r\nplace and becomes the car seat. This can be very useful if you are a heavy person and your carer&rsquo;s<br />\r\nstrength is limited or if moving from the wheelchair is painful for you. Suitable for people of all<br />\r\nsizes including those of short stature and children, the Carony Go has many of the features found<br />\r\non standard powered wheelchairs such as adjustable seat height and narrow wheelbase for indoor<br />\r\nuse</p>','<p>Carony Go,<br />\r\nright. The Carony Go is a powered wheelchair that lets you stay seated while transferring to the car seat. By docking the wheelchair to either a swivel seat or seat lift, the wheelchair seat can be slid off its base and onto the docking plate where the seat locks safely in<br />\r\nplace and becomes the car seat. This can be very useful if you are a heavy person and your carer&rsquo;s<br />\r\nstrength is limited or if moving from the wheelchair is painful for you. Suitable for people of all<br />\r\nsizes including those of short stature and children, the Carony Go has many of the features found<br />\r\non standard powered wheelchairs such as adjustable seat height and narrow wheelbase for indoor<br />\r\nuse</p>','Power Car Seat Transfer','Power Car Seat Transfer',NULL,'0','11','11','/uploads/Mon-Aug-2017_ba9b13ebf76d49ece65c6e36ab67228e.jpg',4,1,10,'2017-09-24 15:50:41','2017-08-28 16:06:52','2017-09-24 15:50:41'),(10,'Carospeed Menox','Carospeed Menox','<p>Carospeed Menox, left + Menox handle top, Steel.The Carospeed Menox moves the control of acceleration and brake from feet operated pedals to one hand operated lever. Pull the lever to accelerate and push to brake. Menox is designed to make each control ergonomic, conforming to a person&rsquo;s natural hand-wrist-arm motion. ..The hand control comes with a &ldquo;hill holder&rdquo;, a set function for the brake that frees up the hand for instance when changing from Drive to Neutral or tuning the radio. A simple and durable design that leaves extensive leg room for the driver. Carospeed is not in the way of knee air bags...The optional multi-function grip maximizes the ability to operate headlights, turn indicators and more from the hand control.<br />\r\nSteering device, Standard carbon ..The same handle as the Carospeed Menox hand control, for individuals seeking a uniform look and feel with their hand control. Available in 4 color choices as standard plus grey as an optional top.<br />\r\neft foot accelerator, Quick release. Mechanically controls the vehicle&rsquo;s original accelerator. As the name suggests the pedal can easily be removed to restore original function. Universal design that can be installed in RHD and LHD vehicles as well as in most makes and models.<br />\r\nPedal Extension, automatic gearbox. Enables an extension of 10-30 cm. Adjustments can be made for distance, height and the desired space between pedals. They are also fitted with a quick release, to be easily removed. It can be installed into both automatic and manual vehicles.</p>','<p>Carospeed Menox, left + Menox handle top, Steel.The Carospeed Menox moves the control of acceleration and brake from feet operated pedals to one hand operated lever. Pull the lever to accelerate and push to brake. Menox is designed to make each control ergonomic, conforming to a person&rsquo;s natural hand-wrist-arm motion. ..The hand control comes with a &ldquo;hill holder&rdquo;, a set function for the brake that frees up the hand for instance when changing from Drive to Neutral or tuning the radio. A simple and durable design that leaves extensive leg room for the driver. Carospeed is not in the way of knee air bags...The optional multi-function grip maximizes the ability to operate headlights, turn indicators and more from the hand control.<br />\r\nSteering device, Standard carbon ..The same handle as the Carospeed Menox hand control, for individuals seeking a uniform look and feel with their hand control. Available in 4 color choices as standard plus grey as an optional top.<br />\r\neft foot accelerator, Quick release. Mechanically controls the vehicle&rsquo;s original accelerator. As the name suggests the pedal can easily be removed to restore original function. Universal design that can be installed in RHD and LHD vehicles as well as in most makes and models.<br />\r\nPedal Extension, automatic gearbox. Enables an extension of 10-30 cm. Adjustments can be made for distance, height and the desired space between pedals. They are also fitted with a quick release, to be easily removed. It can be installed into both automatic and manual vehicles.</p>','Hand Control - Pedal Extension- Foot Accelarator','Hand Control - Pedal Extension- Foot Accelarator',NULL,'0','1','1','/uploads/Mon-Aug-2017_3604d617050d25c43c93095f67612246.png',4,1,3,'2017-09-05 18:58:19','2017-08-28 16:08:40','2017-09-05 18:58:19'),(11,'Chariot','Chariot','<p>If you want an exterior lift for a scooter or power chair, weighing up to 350 lbs/159 Kg, Bruno&rsquo;s Chariot is as simple as it gets. It&rsquo;s a &ldquo;lift on wheels&rdquo;. It allows the wheels to swivel 360 degrees. You won&rsquo;t even notice it&rsquo;s there.</p>','<p>If you want an exterior lift for a scooter or power chair, weighing up to 350 lbs/159 Kg, Bruno&rsquo;s Chariot is as simple as it gets. It&rsquo;s a &ldquo;lift on wheels&rdquo;. It allows the wheels to swivel 360 degrees. You won&rsquo;t even notice it&rsquo;s there.</p>','Scooters and power wheelchair lifts','Scooters and power wheelchair lifts',NULL,'0','ASL 700','ASL 700','/uploads/Mon-Aug-2017_7ccda0e9bd3b98eaf28a33363b50c33f.jpg',3,1,12,'2017-09-24 15:50:53','2017-08-28 16:12:10','2017-09-24 15:50:53'),(12,'Elite','Elite','<p>Whether you need help getting up porch stairs, going down to your pier or accessing your deck, a Bruno Elite Outdoor Straight stair-lift helps get you there safely. Bruno&rsquo;s outdoor chairlift features marine-grade fabric and a weather-resistant cover that travels with the chair to protect it from the elements. With easy-to-use operation, the Elite Outdoor Straight stair lift features a soft start and stop and smooth, stable ride along the way. Gain peace-of-mind and Made-in-the-USA reliability with the trusted name in stair-lifts: Bruno.</p>','<p>Whether you need help getting up porch stairs, going down to your pier or accessing your deck, a Bruno Elite Outdoor Straight stair-lift helps get you there safely. Bruno&rsquo;s outdoor chairlift features marine-grade fabric and a weather-resistant cover that travels with the chair to protect it from the elements. With easy-to-use operation, the Elite Outdoor Straight stair lift features a soft start and stop and smooth, stable ride along the way. Gain peace-of-mind and Made-in-the-USA reliability with the trusted name in stair-lifts: Bruno.</p>','Outdoor Straight Stair-Lift','Outdoor Straight Stair-Lift',NULL,'0','SRE 2010E','SRE 2010E','/uploads/Mon-Aug-2017_95f856ddd44aac1f0f297508e4d24677.jpg',3,1,8,'2017-09-24 15:50:24','2017-08-28 16:13:53','2017-09-24 15:50:24'),(13,'Elite','Elite','<p>High-quality custom craftsmanship is the hallmark of every Bruno Elite curved rail stair lift. Built to the exact specifications of your staircase, the Elite stair lift melds into every curve. And the plush chair properly reflects the beauty of your home. Let Bruno&rsquo;s Elite custom curve stair lift safely connect you to all levels of your home again with comfort and style. The Bruno Elite chairlift features a 400 lb (181 kg)lift capacity.</p>','<p>High-quality custom craftsmanship is the hallmark of every Bruno Elite curved rail stair lift. Built to the exact specifications of your staircase, the Elite stair lift melds into every curve. And the plush chair properly reflects the beauty of your home. Let Bruno&rsquo;s Elite custom curve stair lift safely connect you to all levels of your home again with comfort and style. The Bruno Elite chairlift features a 400 lb (181 kg)lift capacity.</p>','Indoor Curved Stair-Lifts','Indoor Curved Stair-Lifts',NULL,'0','CRE 2110','CRE 2110','/uploads/Mon-Aug-2017_c58cf3bdf65b3f596c400ba9b0e496b3.jpg',3,1,4,'2017-09-05 18:58:19','2017-08-28 16:16:35','2017-09-05 18:58:19'),(14,'F5','F5','<p>F5Comfort, Performance and Stability.<br />\r\nThe F5 Corpus is a durable, powerful and stable front wheel drive power wheelchair combined with the best seating system on the market &ndash;the Corpus seat. The seating system is designed to effectively support the clinical, functional and lifestyle needs of active users. The latest version of the Corpus offers five optional power seat functions. The possibility to have programmable anterior tilt is now a standard option.In developing the F5 chassis we have placed great emphasis on fine tuning suspension and ride comfort. Coupled to powerful motors, thismakes for great performance and a stable, confidence-inspiring driving experience. A range of alternative driving controls for non-joystick drivers is available,as well as separate controls for assistants/caregivers.For transport purposes, the upper part of the backrest can be removed to reduce the overall size of the wheelchair</p>','<p>F5Comfort, Performance and Stability.<br />\r\nThe F5 Corpus is a durable, powerful and stable front wheel drive power wheelchair combined with the best seating system on the market &ndash;the Corpus seat. The seating system is designed to effectively support the clinical, functional and lifestyle needs of active users. The latest version of the Corpus offers five optional power seat functions. The possibility to have programmable anterior tilt is now a standard option.In developing the F5 chassis we have placed great emphasis on fine tuning suspension and ride comfort. Coupled to powerful motors, thismakes for great performance and a stable, confidence-inspiring driving experience. A range of alternative driving controls for non-joystick drivers is available,as well as separate controls for assistants/caregivers.For transport purposes, the upper part of the backrest can be removed to reduce the overall size of the wheelchair</p>','Standing power wheelchair','Standing power wheelchair',NULL,'0','MM','MM','/uploads/Mon-Aug-2017_920fafb9393946a6d66e7fc8b5df97b5.jpg',5,1,14,'2017-09-24 15:50:48','2017-08-28 16:18:12','2017-09-24 15:50:48'),(15,'F5 VS','F5 VS','<p>The F5 Corpus VS is a durable, powerful and stable front wheel drive power wheelchair combined with the best seating system on the market&ndash;the Corpus seat. The seating system is designed to effectively support the clinical, functional and lifestyle needs of active users.The latest version of the Vertical Stander (VS) offers all the power seat functions of the Corpus seat plus an innovative new way of standing,allowing you to choose from two positions, Sit-to-stand or Lay-to-stand.Giving you greater independence and freedom, the F5 Corpus VS features fully independent suspension and automatic, self-adjusting support wheels, providing a new level of comfort and stability, especially when you stand and drive, indoors or outdoors!A range of alternative driving controls for non-joystick drivers is available,as well as separate controls for assistants/caregivers.For transport purposes, the upper part of the backrest can be removed to reduce the overall size of the wheelchair.</p>','<p>The F5 Corpus VS is a durable, powerful and stable front wheel drive power wheelchair combined with the best seating system on the market&ndash;the Corpus seat. The seating system is designed to effectively support the clinical, functional and lifestyle needs of active users.The latest version of the Vertical Stander (VS) offers all the power seat functions of the Corpus seat plus an innovative new way of standing,allowing you to choose from two positions, Sit-to-stand or Lay-to-stand.Giving you greater independence and freedom, the F5 Corpus VS features fully independent suspension and automatic, self-adjusting support wheels, providing a new level of comfort and stability, especially when you stand and drive, indoors or outdoors!A range of alternative driving controls for non-joystick drivers is available,as well as separate controls for assistants/caregivers.For transport purposes, the upper part of the backrest can be removed to reduce the overall size of the wheelchair.</p>','Vertical Standing Power Wheelchair','Vertical Standing Power Wheelchair',NULL,'0','11','11','/uploads/Mon-Aug-2017_920fafb9393946a6d66e7fc8b5df97b5.jpg',5,1,14,'2017-09-24 15:50:48','2017-08-28 16:21:47','2017-09-24 15:50:48'),(16,'M3 Corpus','M3 Corpus','<p>M3 CORPUS&reg;&ndash;your confident drive.&nbsp; This chair is formidable combination of chassis and seat. The M3 Corpus follows your natural body movement, giving you a stable, more comfortable driving experience, so you can sit longer, reach further and do more.</p>','<p>M3 CORPUS&reg;&ndash;your confident drive.&nbsp; This chair is formidable combination of chassis and seat. The M3 Corpus follows your natural body movement, giving you a stable, more comfortable driving experience, so you can sit longer, reach further and do more.</p>','Power wheelchair','Power wheelchair',NULL,'0','M3 Corpus','M3 Corpus','/uploads/Mon-Aug-2017_74c2d74ca158f7742ad58f536c90ec0d.jpg',5,1,11,'2017-09-24 15:50:48','2017-08-28 16:26:14','2017-09-24 15:50:48'),(17,'M400 Corpus 3G','M400 Corpus 3G','<p>The M400Corpus 3GUnique center wheel drive. About 30 years ago Permobil was the first to introduce the centre wheel drive to the market. Continuing our rich tradition of new ideas, we are now extending our range of products with the M400. Developed by the senior designers at Permobil, Mehdi Mirzaie and Bo Engman, the M400 features the new Climbing and Traction Link system. The M400 has a compact format, a small turning radius of 510 mm, and is fitted with PG 120 A R-net electronics. There are two speed packages available: 10 km/hr as standard and 12 km/hr as an option.The easy-to-maintain M400 offers quick access to its components and requires no special tools for maintenance.</p>\r\n\r\n<p>Model Highlights<br />\r\nMaximum user weight 136 kg<br />\r\nRange 30-35 km<br />\r\nMaximum speed 10-12 km/h<br />\r\nObstacle height 60-80 mm<br />\r\nTurning radius 585 mm<br />\r\nCrash tested.</p>','<p>The M400Corpus 3GUnique center wheel drive. About 30 years ago Permobil was the first to introduce the centre wheel drive to the market. Continuing our rich tradition of new ideas, we are now extending our range of products with the M400. Developed by the senior designers at Permobil, Mehdi Mirzaie and Bo Engman, the M400 features the new Climbing and Traction Link system. The M400 has a compact format, a small turning radius of 510 mm, and is fitted with PG 120 A R-net electronics. There are two speed packages available: 10 km/hr as standard and 12 km/hr as an option.The easy-to-maintain M400 offers quick access to its components and requires no special tools for maintenance.</p>\r\n\r\n<p>Model Highlights<br />\r\nMaximum user weight 136 kg<br />\r\nRange 30-35 km<br />\r\nMaximum speed 10-12 km/h<br />\r\nObstacle height 60-80 mm<br />\r\nTurning radius 585 mm<br />\r\nCrash tested.</p>','Mid-wheel drive','Mid-wheel drive',NULL,'0','M400','M400','/uploads/Mon-Aug-2017_ce5a913c4a9d8158a13220a415201588.jpg',5,1,11,'2017-09-24 15:50:48','2017-08-28 16:27:21','2017-09-24 15:50:48'),(18,'Out-Rider','Out-Rider','<p>Sit by the cab to load your wheelchair, scooter or power wheelchair into your truck bed. Bruno&rsquo;s rugged Out-Rider was invented just for pickup trucks. Versions for mobility devices ranging from 100 lbs/45kg to 350 lbs/159 kg</p>','<p>Sit by the cab to load your wheelchair, scooter or power wheelchair into your truck bed. Bruno&rsquo;s rugged Out-Rider was invented just for pickup trucks. Versions for mobility devices ranging from 100 lbs/45kg to 350 lbs/159 kg</p>','Scooters and power wheelchair lifts','Scooters and power wheelchair lifts',NULL,'0','PUL 1100','PUL 1100','/uploads/Mon-Aug-2017_e504a960c6ac7b2a595142b4b45d7c3d.jpg',3,1,12,'2017-09-24 15:50:53','2017-08-28 16:28:45','2017-09-24 15:50:53'),(19,'Stow-Away','Stow-Away','<p>Tough, hidden and hassle-free, Bruno’s Stow-Away is housed in a sealed container under your truck’s running board. Press a button, the drawer slides out and a transfer seat raises up.</p>','<p>Tough, hidden and hassle-free, Bruno’s Stow-Away is housed in a sealed container under your truck’s running board. Press a button, the drawer slides out and a transfer seat raises up.</p>','Scooters and power wheelchair lifts','Scooters and power wheelchair lifts',NULL,'0','1','1','/uploads/Tue-Aug-2017_a353b048c4bf8c87272e5e3b40b6e413.png',3,1,12,'2017-09-24 15:50:53','2017-08-28 16:30:57','2017-09-24 15:50:53'),(20,'Evo','Evo','<p>hhfhfeg hgehge<br />\r\nkkgker</p>','<p>hhfhfeg hgehge<br />\r\nkkgker</p>','11kkkgkgkgk','11kkskssks',NULL,'0','11','11','/uploads/Tue-Aug-2017_fdcfffde8c80dee779b8fcc50e9704a5.jpg',4,1,13,'2017-09-24 15:51:05','2017-08-29 15:43:08','2017-09-24 15:51:05'),(21,'Permobil M5','M5','<p>M5 CORPUS&reg;</p>\r\n\r\n<p>YOUR EVERYWHERE DRIVE Supreme comfort with true outdoor capability.</p>\r\n\r\n<p>The M5 follows your natural body movement, giving you a best-in-class driving experience, so you can sit for longer, reach further and travel greater distances&ndash;especially when driving outdoors. With Agile suspension on all wheels, it sets a new standard for mid-wheel drive comfort, providing stability and grip on slopes and uneven ground. That stability means you can drive while elevated with full suspension functionality.</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Agile suspension: With full suspension on all 6 wheels, Agile offers you the best of comfort, stability and grip on slopes and obstacles, especially outdoors on uneven ground. Active Height: All day long participation. Drive while fully elevated (350mm) at up to 5 km/h, with full suspension functionality.</p>','<p>mmm</p>','Power wheelchair, Mid-wheel, with multiple power options','كرسي كهربائي ، دفع وسطي ، متعدد الحركات','https://www.youtube.com/watch?v=c4EAUgqdY3s','0','M5','M5','/uploads/Wed-Sep-2017_80d3593be7467c6e0a2b4f27d3157fd8.jpg',5,1,41,NULL,'2017-09-25 16:00:08','2017-09-27 12:45:21'),(22,'Pride Lift Chair','mm','<p>Pride&reg; Lift Chairs not only enhance lives, but with the widest range of fabrics and styles, enhance any</p>\r\n\r\n<p>home&rsquo;s d&eacute;cor.</p>',NULL,'Lift Chair','mm',NULL,'0',NULL,NULL,NULL,7,1,39,'2017-09-25 17:05:31','2017-09-25 16:49:02','2017-09-25 17:05:31'),(23,'Meyland-smith- Mini Walk','mm','<p>Miniwalk&reg;</p>\r\n\r\n<p>Miniwalk&reg; is a walker for children with disabilities that affect their mobility. The gait trainer is available</p>\r\n\r\n<p>in two sizes and can be used by children at approx. ages 1&frac12; 7 years. It is essential that the child is motivated to move and explore early on.</p>\r\n\r\n<p>Generally it applies that the earlier the child is stimulated to walk the greater is the chance of achieving a gait pattern.</p>',NULL,'A walker for children with disabilities','mm',NULL,'0',NULL,NULL,'/uploads/Mon-Sep-2017_42766098a72b2b10f4eca2f27d9c6167.jpg',3,1,57,'2017-09-28 05:30:38','2017-09-25 17:12:00','2017-09-28 05:30:38'),(24,'Feal-Portable Ramp','mm','<p>Portable ramp</p>\r\n\r\n<p>Fixed, folding or telescopic. Our portable ramps are available in a variety of different shapes and sizes.They&rsquo;re easy to bring along on trips or to places that do not have fixed ramps. Features include handles that retract effortlessly, Simple locks that you can open and close in one easy step, and superior slip resistance.</p>',NULL,'Portable Ramp','mm','https://www.youtube.com/watch?v=c4EAUgqdY3s','0',NULL,NULL,NULL,3,1,67,'2017-09-28 06:30:14','2017-09-25 17:40:56','2017-09-28 06:30:14'),(25,'Hand Control','mm','<p>Carospeed Menox, left + Menox handle top, Steel. The Carospeed Menox moves the control of acceleration and brake from feet operated pedals to one hand operated lever. Pull the lever to accelerate and push to breke. Menox is designed to</p>\r\n\r\n<p>make each control ergonomic, conforming to a person&rsquo;s natural hand-wrist-arm motion. ..The hand control comes with a &ldquo;hill holder&rdquo;, a set function for the brake that frees up the hand for instance when changing from Drive to Neutral or tuning the radio. A simple and durable design that leaves extensive leg room for the driver.</p>\r\n\r\n<p>Carospeed is not in the way of knee air bags...The optional multi-function grip maximizes the ability to operate headlights, turn indicators and more from the hand control.</p>\r\n\r\n<p>Steering device, Standard carbon ..The same handle as the Carospeed Menox hand control, for individuals seeking a uniform look and feel with their hand control. Available in 4 color choices as standard plus grey as an optional top</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Left foot accelerator, Quick release. Mechanically controls the vehicle&rsquo;s original accelerator. As the name suggests the pedal can easily be removed to restore original function. Universal design that can be installed in RHD and LHD vehicles as well as in most makes and models.</p>\r\n\r\n<p>Pedal Extension, automatic gearbox. Enables an extension of 10-30 cm. Adjustments can be made for distance, height and the desired space between pedals. They are also fitted with a quick release, to be easily removed. Can be installed into both automatic and manual vehicles.</p>','<p>mm</p>','Hand Control for Driving Aid','mm',NULL,'0',NULL,NULL,'/uploads/Mon-Sep-2017_df099172d38371d7de79e1e33316e81f.jpg',4,1,87,NULL,'2017-09-25 18:00:21','2017-09-25 18:00:21'),(26,'Outdoor Power Wheelchair','X8',NULL,NULL,'Power wheelchair for outdoor use','كرسي كهربائي ، لطرق الوعرة',NULL,'15000','X8','X8','/uploads/Wed-Sep-2017_2c4c0ef9a8732454cdae0c4a92c157f9.jpg',10,2,99,NULL,'2017-09-27 13:29:21','2017-09-27 16:01:36'),(27,'Tilit ZRA','تايلايت','<p>ZRA is Titinum Rigid light wieght active wheelchair for daily use.&nbsp;</p>\r\n\r\n<p>With full adjustability and a minimalist mono-tube frame, the ZRA dishes out style without boundaries. Add the ZRA&rsquo;s TiFit titanium frame, and you have the complete package. Strength, style, and the ability to set-up and configure your chair just for you.</p>','<p>ZRA هوكرسي متحرك للاستخدام اليومي مصنوع من&nbsp; تيتينوم&nbsp; .مع ضبط كامل والإطار أحادي الأنبوب الحد الأدنى، وأطباق ZRA خارج الاسلوب دون حدود. إضافة إطار التيتانيوم تيفيت زرا، وكان لديك حزمة كاملة. القوة، والأسلوب، والقدرة على انشاء وتكوين اللحم فقط لأجلك.</p>','ZRA','ZRA','https://www.youtube.com/watch?v=-froHDMGRpY','22000','ZRA','ZRA','/uploads/Thu-Sep-2017_703c47270aa4ef0a51ec729678722c2b.jpg',12,2,20,NULL,'2017-09-28 04:42:51','2017-09-28 04:42:51');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product_category_parent_id_foreign` (`parent_id`),
  CONSTRAINT `product_category_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `product_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` VALUES (1,'category 1','فئه 1','/uploads/partners1.png',NULL,'2017-08-24 12:49:47','2017-08-24 11:18:29','2017-08-24 12:49:47','0'),(2,'category 2','فئه 2','/uploads/partners2.png',NULL,'2017-08-24 12:49:51','2017-08-24 11:18:29','2017-08-24 12:49:51','0'),(3,'Driving Aids','Driving Aids','/uploads/Thu-Aug-2017_a353b048c4bf8c87272e5e3b40b6e413.png',NULL,'2017-09-05 18:58:19','2017-08-24 12:55:08','2017-09-05 18:58:19','0'),(4,'Indoor Curved Stair-Lifts','Indoor Curved Stair-Lifts','/uploads/Thu-Aug-2017_03177e8b0c9d37af835fd712bd82d33e.jpg',3,'2017-09-05 18:58:19','2017-08-24 12:55:22','2017-09-05 18:58:19','0'),(5,'Indoor Straight Stair-Lifts','Indoor Straight Stair-Lifts','/uploads/Thu-Aug-2017_7ccda0e9bd3b98eaf28a33363b50c33f.jpg',NULL,'2017-09-24 15:50:01','2017-08-24 12:55:49','2017-09-24 15:50:01','0'),(6,'Mats for Beaches','Mats for Beaches','/uploads/Thu-Aug-2017_7ccda0e9bd3b98eaf28a33363b50c33f.jpg',NULL,'2017-09-24 15:50:08','2017-08-24 13:11:19','2017-09-24 15:50:08','0'),(7,'Outdoor Curved Stair-Lifts','Outdoor Curved Stair-Lifts','/uploads/Thu-Aug-2017_428171b7d052a1dd11f2aef5cec1e502.jpg',NULL,'2017-09-24 15:50:14','2017-08-24 13:12:24','2017-09-24 15:50:14','0'),(8,'Outdoor Straight Stair-Lifts','Outdoor Straight Stair-Lifts','/uploads/Thu-Aug-2017_f6bf48e6186b7ce90aeda4eae878a153.jpg',NULL,'2017-09-24 15:50:24','2017-08-24 13:13:07','2017-09-24 15:50:24','0'),(9,'Pediatric Power Wheelchair','Pediatric Power Wheelchair','/uploads/Thu-Aug-2017_3f9809dc818f5954143fea47503c2950.jpg',NULL,'2017-09-24 15:50:30','2017-08-24 13:13:29','2017-09-24 15:50:30','0'),(10,'Power Car Seat Transfer','Power Car Seat Transfer','/uploads/Thu-Aug-2017_70e777f6553c5e366da131eabfb17edb.jpg',NULL,'2017-09-24 15:50:41','2017-08-24 13:13:59','2017-09-24 15:50:41','0'),(11,'Power Wheelchairs','Power Wheelchairs','/uploads/Thu-Aug-2017_74c2d74ca158f7742ad58f536c90ec0d.jpg',NULL,'2017-09-24 15:50:48','2017-08-24 13:14:41','2017-09-24 15:50:48','0'),(12,'Scooters and Power-Wheelchair Lifts','Scooters and Power-Wheelchair Lifts','/uploads/Thu-Aug-2017_3604d617050d25c43c93095f67612246.png',NULL,'2017-09-24 15:50:53','2017-08-24 13:15:08','2017-09-24 15:50:53','0'),(13,'Swivel Car Seat','Swivel Car Seat','/uploads/Thu-Aug-2017_f0f4149f9099f4729048e0a409c93465.jpg',NULL,'2017-09-24 15:51:05','2017-08-24 13:15:37','2017-09-24 15:51:05','0'),(14,'Vertical Standing Power Wheelchairs','Vertical Standing Power Wheelchairs','/uploads/Thu-Aug-2017_a353b048c4bf8c87272e5e3b40b6e413.png',15,'2017-09-24 15:50:48','2017-08-24 13:16:40','2017-09-24 15:50:48','0'),(15,'Water Wheels','Water Wheels','/uploads/Thu-Aug-2017_ce5a913c4a9d8158a13220a415201588.jpg',11,'2017-09-24 15:50:48','2017-08-24 13:17:05','2017-09-24 15:50:48','0'),(16,'Wheelchair Hoist','Wheelchair Hoist','/uploads/Thu-Aug-2017_f0f4149f9099f4729048e0a409c93465.jpg',NULL,'2017-09-24 15:51:10','2017-08-24 13:17:29','2017-09-24 15:51:10','0'),(17,'Wheelchairs','كراسي متحركة','/uploads/Sun-Sep-2017_0f50f2b6673da4d099d2063a7c74376b.jpg',NULL,NULL,'2017-09-05 17:51:30','2017-09-27 11:55:17','0'),(18,'Manual/Active WC','كراسي يدوية','/uploads/Sun-Sep-2017_3f4692b9c950b98eccc08d52d896fbcd.jpg',17,NULL,'2017-09-05 17:56:41','2017-09-27 18:00:05','0'),(19,'Manual Wheelchairs','mmmm',NULL,17,'2017-09-05 18:06:15','2017-09-05 18:05:09','2017-09-05 18:06:15','0'),(20,'Adult WC','كرسي متحرك يدوي للكبار','/uploads/Wed-Sep-2017_e00940007727f28136ecc54a6ea2929d.jpg',18,NULL,'2017-09-05 18:08:28','2017-09-27 18:18:35','0'),(21,'Children WC','كرسي متحرك يدوي للأطفال','/uploads/Wed-Sep-2017_48a5f4d918784723fb601b0d38d61e59.jpg',18,NULL,'2017-09-05 18:09:09','2017-09-27 18:52:06','0'),(22,'Power wheelchairs','كراسي كهربائية','/uploads/Sun-Sep-2017_2efa611257e9dda0d0a1e0e225681194.jpg',17,NULL,'2017-09-05 18:13:13','2017-09-27 11:50:02','0'),(23,'Walking Aids','Walking Aids',NULL,NULL,'2017-09-05 19:29:23','2017-09-05 18:16:25','2017-09-05 19:29:23','0'),(24,'Pediatric Walking Aids','Pediatric Walking Aids',NULL,23,'2017-09-05 19:29:23','2017-09-05 18:17:37','2017-09-05 19:29:23','0'),(25,'Elderly Walking Aids','Elderly Walking AIds',NULL,23,'2017-09-05 19:29:23','2017-09-05 18:18:47','2017-09-05 19:29:23','0'),(26,'Ramps','Ramps',NULL,NULL,'2017-09-05 19:29:33','2017-09-05 18:19:18','2017-09-05 19:29:33','0'),(27,'Van Ramps','Van Ramps',NULL,26,'2017-09-05 19:29:33','2017-09-05 18:19:46','2017-09-05 19:29:33','0'),(28,'Portable Ramps','Portable Ramps',NULL,26,'2017-09-05 19:29:33','2017-09-05 18:20:13','2017-09-05 19:29:33','0'),(29,'Wheelchair Lifts and Car Accessibility','Wheelchair Lifts and Car Accessibility',NULL,NULL,'2017-09-05 19:29:46','2017-09-05 18:22:06','2017-09-05 19:29:46','0'),(30,'Rear Entry Lift','Rear Entry Lift',NULL,29,'2017-09-05 19:29:46','2017-09-05 18:23:04','2017-09-05 19:29:46','0'),(31,'Under Vehicle Lift','Under Vehicle Lift',NULL,29,'2017-09-05 19:29:46','2017-09-05 18:23:46','2017-09-05 19:29:46','0'),(32,'Entervan','Entervan',NULL,29,'2017-09-05 19:29:46','2017-09-05 18:24:17','2017-09-05 19:29:46','0'),(33,'Home Accessibility','Home Accessibility',NULL,NULL,'2017-09-05 19:29:56','2017-09-05 18:28:47','2017-09-05 19:29:56','0'),(34,'Indoor Stair-lifts','Indoor Stair-lifts',NULL,33,'2017-09-05 19:29:56','2017-09-05 18:29:52','2017-09-05 19:29:56','0'),(35,'Outdoor-Stair-lifts','Outdoor Stair-lifts',NULL,33,'2017-09-05 19:29:56','2017-09-05 18:30:32','2017-09-05 19:29:56','0'),(36,'Straight','Straight',NULL,34,'2017-09-05 19:29:56','2017-09-05 18:36:07','2017-09-05 19:29:56','0'),(37,'Curved','Curved',NULL,34,'2017-09-05 19:29:56','2017-09-05 18:36:26','2017-09-05 19:29:56','0'),(38,'Wheelchair Accessories','كماليات',NULL,17,NULL,'2017-09-05 19:00:00','2017-09-27 14:55:55','0'),(39,'Bariatric WC','كرسي متحرك للاوزان الثقيلة','/uploads/Wed-Sep-2017_022d6a270b03d1cc548b3dfb3eb31f22.jpg',18,NULL,'2017-09-05 19:04:11','2017-09-27 19:02:10','0'),(40,'Outdoor  WC','كرسي للطرق الوعرة والرملية','/uploads/Wed-Sep-2017_81f6c283d2bebc36be76dc0565a87c8a.jpg',18,NULL,'2017-09-05 19:08:03','2017-09-27 19:05:42','0'),(41,'Adult PWC','للكبار',NULL,22,NULL,'2017-09-05 19:10:55','2017-09-27 13:16:12','0'),(42,'Pediatric/Children PWC','للأطفال',NULL,22,NULL,'2017-09-05 19:11:47','2017-09-27 14:56:52','0'),(43,'Bariatric/Heavy Duty PWC','للاستخدام الثقيل',NULL,22,NULL,'2017-09-05 19:12:16','2017-09-27 14:57:50','0'),(44,'Outdoor PWC','للاستخام في الطرق الوعرة والرملية',NULL,22,NULL,'2017-09-05 19:12:38','2017-09-27 14:58:54','0'),(45,'cushions and Backs','Cushions and Backs','/uploads/Thu-Sep-2017_b47104ab8dc5309dc74d3a77bd9d493c.jpg',38,NULL,'2017-09-05 19:13:49','2017-09-28 06:33:49','0'),(46,'Special Gloves','Special Gloves','/uploads/Thu-Sep-2017_b39bfbdf8299c2ecaa4bf8f9af8d7d57.jpg',38,NULL,'2017-09-05 19:14:15','2017-09-28 06:36:14','0'),(47,'Lap-Trays','Lab-Trays','/uploads/Thu-Sep-2017_eb1e72de8390548db0f5b568d90e798f.png',38,NULL,'2017-09-05 19:14:45','2017-09-28 06:41:50','0'),(48,'Comfort Wheelchairs','Comfort Wheelchairs','/uploads/Sun-Sep-2017_5a9f47f1fe67dc3f4d76063db17ef7a3.jpg',17,NULL,'2017-09-05 19:17:04','2017-09-28 05:08:33','0'),(49,'Adult CSS','Adult CSS',NULL,48,NULL,'2017-09-05 19:17:42','2017-09-28 05:44:34','0'),(50,'Children CSS','Children CSS',NULL,48,NULL,'2017-09-05 19:26:50','2017-09-28 05:43:55','0'),(51,'Bariatric CSS','Bariatric CSS',NULL,48,NULL,'2017-09-05 19:27:24','2017-09-28 05:45:11','0'),(52,'Standing and Walking','الوقوف والمشي','/uploads/Sun-Sep-2017_cd330b2b5290c9fdbde7fd450820b383.jpg',NULL,NULL,'2017-09-05 19:30:58','2017-09-28 05:21:51','0'),(53,'Temotoes','Temotoes',NULL,52,'2017-09-28 05:29:21','2017-09-05 19:32:08','2017-09-28 05:29:21','0'),(54,'Easystand','Easystand',NULL,52,'2017-09-28 05:29:25','2017-09-05 19:32:29','2017-09-28 05:29:25','0'),(55,'Levo','Levo',NULL,52,'2017-09-28 05:29:30','2017-09-05 19:32:48','2017-09-28 05:29:30','0'),(56,'Permobil','Permobil',NULL,52,'2017-09-28 05:29:34','2017-09-05 19:33:05','2017-09-28 05:29:34','0'),(57,'Meyland-smith','Meyland-smith',NULL,52,'2017-09-28 05:30:38','2017-09-05 19:33:38','2017-09-28 05:30:38','0'),(58,'Walking and Crawling','المشي والحبو','/uploads/Thu-Sep-2017_7d794fc4f3207dc67e38badd6bdc1571.jpg',52,NULL,'2017-09-05 19:34:22','2017-09-28 05:41:29','0'),(59,'Walkers','Walkers','/uploads/Mon-Sep-2017_7f4180063f8c577a6cfde6dca3df3999.jpg',NULL,'2017-09-28 05:22:28','2017-09-05 19:35:11','2017-09-28 05:22:28','0'),(60,'Meyland-smith','Meyland-smith',NULL,59,'2017-09-28 05:22:28','2017-09-05 19:36:21','2017-09-28 05:22:28','0'),(61,'Gate','Gate',NULL,59,'2017-09-28 05:22:28','2017-09-05 19:36:58','2017-09-28 05:22:28','0'),(62,'Home Equipment','Home Equipment','/uploads/Mon-Sep-2017_bdecc0d541ba2f156faa7a5293275101.jpg',NULL,NULL,'2017-09-05 19:38:30','2017-09-25 15:44:39','0'),(63,'Ramps and Stair Climbers','Ramps and Stair Climbers',NULL,62,NULL,'2017-09-05 19:39:24','2017-09-05 19:39:24','0'),(64,'Sano','Sano',NULL,63,'2017-09-28 06:30:00','2017-09-05 19:40:36','2017-09-28 06:30:00','0'),(65,'Stepless','Stepless',NULL,63,'2017-09-28 06:30:05','2017-09-05 19:40:52','2017-09-28 06:30:05','0'),(66,'Roll A Ramp','Roll A Ramp',NULL,63,'2017-09-28 06:30:10','2017-09-05 19:41:19','2017-09-28 06:30:10','0'),(67,'Feal','Feal',NULL,63,'2017-09-28 06:30:14','2017-09-05 19:41:36','2017-09-28 06:30:14','0'),(68,'Handicare Stair-lifts','Handicare Stair-lifts',NULL,63,'2017-09-28 06:30:19','2017-09-05 19:42:22','2017-09-28 06:30:19','0'),(69,'Beds','Beds',NULL,62,NULL,'2017-09-05 19:43:01','2017-09-05 19:43:01','0'),(70,'Comfort System','Comfort System',NULL,69,NULL,'2017-09-05 19:43:36','2017-09-05 19:43:36','0'),(71,'Team Sacn','Team Sacn',NULL,69,NULL,'2017-09-05 19:43:57','2017-09-05 19:43:57','0'),(72,'Bath and Toilets','Bath and Toilets',NULL,62,NULL,'2017-09-05 19:44:48','2017-09-05 19:44:48','0'),(73,'Gate','Gate',NULL,72,NULL,'2017-09-05 19:46:11','2017-09-05 19:46:11','0'),(74,'Handicare Linido Solutions','Handicare Lindo Solutions',NULL,72,NULL,'2017-09-05 19:49:14','2017-09-05 19:51:00','0'),(75,'Car Modification','Car Adaptation','/uploads/Mon-Sep-2017_d19b3614a5210a6b0924a212d47e45e2.jpg',75,NULL,'2017-09-05 19:52:53','2017-09-28 06:26:12','0'),(76,'Brouno','Brouno','/uploads/Mon-Sep-2017_4082d168c2918b58323e50271d3addab.png',75,NULL,'2017-09-05 19:53:38','2017-09-25 17:49:21','0'),(77,'Autoadapt','Autoadapt','/uploads/Mon-Sep-2017_2efa611257e9dda0d0a1e0e225681194.jpg',75,NULL,'2017-09-05 19:54:13','2017-09-25 17:44:45','0'),(78,'AMF','AMF',NULL,75,NULL,'2017-09-05 19:54:40','2017-09-05 19:54:40','0'),(79,'Outdoor Products','منتجات للاستعمال الخارجي','/uploads/Thu-Sep-2017_15d5e2f38276278011102f30838e4d6d.jpg',NULL,NULL,'2017-09-05 19:57:06','2017-09-28 04:56:08','0'),(80,'4Power4','4Power4',NULL,79,'2017-09-28 06:49:41','2017-09-05 19:57:46','2017-09-28 06:49:41','0'),(81,'Pride Mobility','Pride Mobility',NULL,79,'2017-09-28 06:49:46','2017-09-05 19:58:36','2017-09-28 06:49:46','0'),(82,'Permobil','Permobil',NULL,79,NULL,'2017-09-05 19:59:09','2017-09-05 19:59:09','0'),(83,'Vipamat','Vipamat',NULL,79,NULL,'2017-09-05 19:59:32','2017-09-05 19:59:32','0'),(84,'Meyland-smith','Meyland-smith',NULL,79,NULL,'2017-09-05 20:00:00','2017-09-05 20:00:00','0'),(85,'new','me','/uploads/Wed-Sep-2017_b50fc2292ce7c4e21ecbd70ff8aa99bf.jpg',NULL,'2017-09-06 21:12:06','2017-09-06 20:19:00','2017-09-06 21:12:06','1'),(86,'Eolv Glider','mmm','/uploads/Mon-Sep-2017_d19b3614a5210a6b0924a212d47e45e2.jpg',54,'2017-09-28 05:29:25','2017-09-25 17:17:10','2017-09-28 05:29:25','0'),(87,'Driving Aids','mm',NULL,77,NULL,'2017-09-25 17:50:43','2017-09-25 17:50:43','0'),(88,'Carony Classic','mmm',NULL,77,NULL,'2017-09-25 17:51:05','2017-09-25 17:51:05','0'),(89,'EVO','NN',NULL,77,NULL,'2017-09-25 17:51:25','2017-09-25 17:51:25','0'),(90,'Carony GO','MM',NULL,77,NULL,'2017-09-25 17:51:48','2017-09-25 17:51:48','0'),(91,'Carolift','mm',NULL,77,NULL,'2017-09-25 17:52:17','2017-09-25 17:52:17','0'),(92,'Manual','يدوي',NULL,17,'2017-09-27 11:50:57','2017-09-27 11:19:02','2017-09-27 11:50:57','0'),(93,'Pediatric','كراسي أطفال',NULL,92,'2017-09-27 11:50:57','2017-09-27 11:19:50','2017-09-27 11:50:57','0'),(94,'Outdoor','للاستخام في الطرق الوعرة',NULL,92,'2017-09-27 11:50:57','2017-09-27 11:20:46','2017-09-27 11:50:57','0'),(95,'Adult','كبار',NULL,92,'2017-09-27 11:50:57','2017-09-27 11:22:18','2017-09-27 11:50:57','0'),(96,'Bariatric/Heavy Duty','للاستخدام الثقيل',NULL,92,'2017-09-27 11:50:57','2017-09-27 11:23:57','2017-09-27 11:50:57','0'),(97,'Power Wheelchairs','كراسي كهربائية',NULL,17,'2017-09-27 11:51:03','2017-09-27 11:28:56','2017-09-27 11:51:03','0'),(98,'Wheelchairs','كراسي متحركة',NULL,17,'2017-09-27 11:55:27','2017-09-27 11:47:49','2017-09-27 11:55:27','0'),(99,'Outdoor PWC','للاستخام في الطرق الوعرة','/uploads/Wed-Sep-2017_8df793b6e2e0cf3587131e0dc93a2e61.jpg',17,NULL,'2017-09-27 11:56:21','2017-09-27 13:41:51','0'),(100,'Magic Mobility','Magic Mobility','/uploads/Wed-Sep-2017_8df793b6e2e0cf3587131e0dc93a2e61.jpg',44,NULL,'2017-09-27 13:19:24','2017-09-27 13:19:52','0'),(101,'Standing PWC','كراسي بخاصية الوقوف',NULL,22,NULL,'2017-09-27 15:00:02','2017-09-27 15:00:02','0'),(102,'Scooters','عربات كهربائية','/uploads/Thu-Sep-2017_52da946490aa28487fe306acfca3882e.jpg',NULL,'2017-09-28 06:47:25','2017-09-28 04:41:39','2017-09-28 06:47:25','0'),(103,'Exercise & Physiotherapy Products','منتجات للتمرين والعلاج الطبيعي',NULL,NULL,NULL,'2017-09-28 05:01:15','2017-09-28 05:01:15','0'),(104,'Convaid','Convaid',NULL,48,'2017-09-28 05:28:27','2017-09-28 05:10:11','2017-09-28 05:28:27','0'),(105,'Seating and Poistioning','Seating and Positioning','/uploads/Thu-Sep-2017_5b5dd52d71a275b4d701b82f1cb51c4e.jpg',NULL,NULL,'2017-09-28 05:34:38','2017-09-28 05:36:38','0'),(106,'Standing Equipment','أجهزة للوقوف','/uploads/Thu-Sep-2017_d79a163eb21bcd9e2a0adc2b74142310.jpg',52,NULL,'2017-09-28 05:37:21','2017-09-28 05:37:21','0'),(107,'Cushions and Back','Cushions and Back',NULL,105,NULL,'2017-09-28 05:38:14','2017-09-28 05:48:30','0'),(108,'Belts and Accessories','Belts and Accessories',NULL,105,NULL,'2017-09-28 05:38:51','2017-09-28 05:49:49','0'),(109,'Adult','Adult',NULL,107,NULL,'2017-09-28 05:51:10','2017-09-28 05:51:10','0'),(110,'Children','Children',NULL,107,NULL,'2017-09-28 05:51:35','2017-09-28 05:51:35','0'),(111,'Adult Walkers','مشايات للكبار','/uploads/Thu-Sep-2017_0c51b2a2eabebda8c374487ca40f5b93.jpg',58,NULL,'2017-09-28 05:53:00','2017-09-28 05:53:00','0'),(112,'Adult','Adult',NULL,108,NULL,'2017-09-28 05:53:16','2017-09-28 05:53:16','0'),(113,'Children','Children',NULL,108,NULL,'2017-09-28 05:53:41','2017-09-28 05:53:41','0'),(114,'Children Walkers','مشايات للاطفال','/uploads/Thu-Sep-2017_e78b84d74d23020236b362290476c5c0.jpg',58,NULL,'2017-09-28 05:55:36','2017-09-28 05:55:36','0'),(115,'Standing for Adult','الوقوف للكبار','/uploads/Thu-Sep-2017_b88b845d2c8f7a75ae060c8cc4e896f1.jpg',106,NULL,'2017-09-28 05:59:40','2017-09-28 05:59:40','0'),(116,'Hygiene and Home Care','Hygiene and Home Care','/uploads/Thu-Sep-2017_dfa38b1af68e0f77c793c528d371bff3.png',NULL,NULL,'2017-09-28 05:59:50','2017-09-28 05:59:50','0'),(117,'Beds','Beds',NULL,116,NULL,'2017-09-28 06:02:44','2017-09-28 06:02:44','0'),(118,'Bathroom','Bathroom',NULL,116,NULL,'2017-09-28 06:03:22','2017-09-28 06:03:22','0'),(119,'Multi Function','Multi Function',NULL,117,NULL,'2017-09-28 06:05:07','2017-09-28 06:05:07','0'),(120,'Homecare','Homecare',NULL,117,NULL,'2017-09-28 06:05:35','2017-09-28 06:05:35','0'),(121,'Adult Commode','Adult Commode',NULL,118,NULL,'2017-09-28 06:06:36','2017-09-28 06:52:39','0'),(122,'Standing for Children','الوقوف للاطفال','/uploads/Thu-Sep-2017_800657edb4e74fb09fcc3cab231c578d.jpg',106,NULL,'2017-09-28 06:06:45','2017-09-28 06:06:45','0'),(123,'Children Commode','Children Commode',NULL,118,NULL,'2017-09-28 06:07:04','2017-09-28 06:53:45','0'),(124,'Bathroom Adaptation','Bathroom Adaptation',NULL,118,NULL,'2017-09-28 06:08:58','2017-09-28 06:54:36','0'),(125,'Accessibility Equipment','Accessibility Equipment','/uploads/Thu-Sep-2017_35e484f2bc5902dc00b86d7a41a94fd5.jpg',NULL,NULL,'2017-09-28 06:11:18','2017-09-28 06:17:29','0'),(126,'Accessibility Equipment','Accessibility Equipment',NULL,NULL,'2017-09-28 06:13:35','2017-09-28 06:11:19','2017-09-28 06:13:35','0'),(127,'Ramps and Lifts','Ramps and Lifts',NULL,125,NULL,'2017-09-28 06:18:29','2017-09-28 06:18:29','0'),(128,'Smart Home Solution','Smart Home Solution',NULL,125,NULL,'2017-09-28 06:19:29','2017-09-28 06:19:29','0'),(129,'Transfer Solutions','حلول لتحريك المرضى','/uploads/Thu-Sep-2017_0e9f4d61dbed8ba147efdf2d640db5b2.jpg',NULL,NULL,'2017-09-28 06:20:14','2017-09-28 06:20:14','0'),(130,'Strairs  Climbers and Lifts','Stairs Climbers and Lifts',NULL,125,NULL,'2017-09-28 06:20:27','2017-09-28 06:20:27','0'),(131,'Bathroom','Bathroom',NULL,125,NULL,'2017-09-28 06:21:05','2017-09-28 06:21:05','0'),(132,'Hosts and Slings','Hoists and Slings','/uploads/Thu-Sep-2017_73a54ad617b99c079b3547eda66e2664.jpg',129,NULL,'2017-09-28 06:21:33','2017-09-28 06:24:21','0'),(133,'Manual Handling','Manual Handling','/uploads/Thu-Sep-2017_67bf624dffe5f0562f420cabcc9e212b.jpg',129,NULL,'2017-09-28 06:29:08','2017-09-28 06:29:08','0'),(134,'Car Modification','Car Modification','/uploads/Thu-Sep-2017_f4991e9d6c750e46b3671e969560e03c.jpg',NULL,NULL,'2017-09-28 06:32:42','2017-09-28 06:36:05','0'),(135,'CarSeats','CarSeats','/uploads/Thu-Sep-2017_ff89fb567c1e5c6cf4a0ffe8da98fe87.jpg',134,NULL,'2017-09-28 06:36:51','2017-09-28 06:57:09','0'),(136,'Lifts, Hoist, Ramps','Lifts, Hoist, Ramps','/uploads/Thu-Sep-2017_815fb04c2cf4760f2030cb4220b7de86.jpg',134,NULL,'2017-09-28 06:37:33','2017-09-28 07:02:07','0'),(137,'Independent Living Modules','Independent Living Modules','/uploads/Thu-Sep-2017_cc8edb23640def382b4dda1de91aafe3.jpg',134,NULL,'2017-09-28 06:38:41','2017-09-28 07:03:26','0'),(138,'Lifestyle Products','Lifestyle Products','/uploads/Thu-Sep-2017_eeb576fb8fda9c2d7aacb2abe2119a35.JPG',NULL,NULL,'2017-09-28 06:44:16','2017-09-28 06:45:25','0'),(139,'Beach and Outdoors','Beach and Outdoors',NULL,138,NULL,'2017-09-28 06:46:26','2017-09-28 06:46:26','0'),(140,'Exercise','Exercise',NULL,138,NULL,'2017-09-28 06:46:52','2017-09-28 06:46:52','0'),(141,'Play and Sensory','Play and Sensory',NULL,138,NULL,'2017-09-28 06:47:36','2017-09-28 06:47:36','0'),(142,'Wheelchair Accessories','Wheelchair Accessories',NULL,138,NULL,'2017-09-28 06:48:16','2017-09-28 06:48:16','0'),(143,'Scooters','سكوترز','/uploads/Thu-Sep-2017_d597eb5738369717a91c050b3224df70.jpg',17,NULL,'2017-09-28 06:49:00','2017-09-28 06:49:00','0'),(144,'Airport Solution','Airport Solution',NULL,138,NULL,'2017-09-28 06:49:06','2017-09-28 06:49:06','0');
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_documents`
--

DROP TABLE IF EXISTS `product_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_documents_product_id_foreign` (`product_id`),
  CONSTRAINT `product_documents_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_documents`
--

LOCK TABLES `product_documents` WRITE;
/*!40000 ALTER TABLE `product_documents` DISABLE KEYS */;
INSERT INTO `product_documents` VALUES (1,'/uploads/file1.png','Product_document 1','فايل 1',1,'2017-08-24 12:49:26','2017-08-24 11:18:29','2017-08-24 12:49:26'),(2,'/uploads/file2.png','Product_document 2','فايل 2',2,'2017-08-24 12:49:29','2017-08-24 11:18:29','2017-08-24 12:49:29'),(3,'/uploads/Thu-Aug-2017_6df222732b7ee9c5dce24880434c148d.pdf','Brochure','بروشور',4,'2017-09-24 15:50:48','2017-08-24 13:58:51','2017-09-24 15:50:48'),(4,'/uploads/Tue-Aug-2017_8dc255d3ecb715525651d1044fe05e54.pdf','Stow-Away Brochure','Stow-Away Brochure',19,'2017-09-24 15:50:53','2017-08-29 13:54:12','2017-09-24 15:50:53'),(5,'/uploads/Tue-Aug-2017_79e8fe658282cc73968799060b0b8c55.pdf','E5 VS Brochure','E5 VS Brochure',15,'2017-09-24 15:50:48','2017-08-29 14:03:00','2017-09-24 15:50:48'),(6,'/uploads/Tue-Aug-2017_aedcdf700d3a277f441271105f280f77.pdf','M400 PSJ Brochure','M400 PSJ Brochure',17,'2017-09-24 15:50:48','2017-08-29 15:19:57','2017-09-24 15:50:48'),(7,'/uploads/Wed-Sep-2017_4713744ca939037dfa1807bcd046b4c2.pdf','222','صثصق',23,'2017-09-28 05:30:38','2017-09-27 12:09:45','2017-09-28 05:30:38'),(8,'/uploads/Wed-Sep-2017_2f74141cdc28dd0c5a2b676a52802e56.pdf','Permobil M5 Order Form','نموذج مقاسات M5',21,NULL,'2017-09-27 12:21:15','2017-09-27 12:40:04'),(9,'/uploads/Wed-Sep-2017_75bae1a898129d000f8561ce21433445.pdf','Permobil M5 brochure','كاتالوج M5',21,NULL,'2017-09-27 12:43:06','2017-09-27 12:43:06'),(10,'/uploads/Wed-Sep-2017_169955b9e58ad44bf81c2f85992d4a39.pdf','Magic Mobility X8 brochure','X8 كاتالوج',26,NULL,'2017-09-27 13:31:52','2017-09-27 13:31:52'),(11,'/uploads/Thu-Sep-2017_ef18fe766762741284355c99e8e33d56.pdf','ZRA Catalog','ZRAكاتالوج',27,NULL,'2017-09-28 04:46:27','2017-09-28 04:46:27'),(12,'/uploads/Thu-Sep-2017_ccb75a252fa6ad71d32548ecbf0e3747.pdf','ZRA Order Form','ZRA نموذج طلب',27,NULL,'2017-09-28 04:49:22','2017-09-28 04:49:22');
/*!40000 ALTER TABLE `product_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_entity`
--

DROP TABLE IF EXISTS `product_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_entity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_entity`
--

LOCK TABLES `product_entity` WRITE;
/*!40000 ALTER TABLE `product_entity` DISABLE KEYS */;
INSERT INTO `product_entity` VALUES (1,3,3,NULL,NULL),(2,3,1,NULL,NULL),(3,4,3,NULL,NULL),(4,4,1,NULL,NULL),(5,5,3,NULL,NULL),(6,6,3,NULL,NULL),(7,7,3,NULL,NULL),(8,8,3,NULL,NULL),(9,9,3,NULL,NULL),(10,10,3,NULL,NULL),(11,11,3,NULL,NULL),(12,12,3,NULL,NULL),(13,12,1,NULL,NULL),(14,13,3,NULL,NULL),(15,13,1,NULL,NULL),(16,14,3,NULL,NULL),(17,15,3,NULL,NULL),(18,16,3,NULL,NULL),(19,17,3,NULL,NULL),(20,18,3,NULL,NULL),(21,19,3,NULL,NULL),(22,20,3,NULL,NULL),(23,20,1,NULL,NULL),(24,21,3,NULL,NULL),(25,22,3,NULL,NULL),(26,23,3,NULL,NULL),(27,24,3,NULL,NULL),(28,25,3,NULL,NULL),(29,25,1,NULL,NULL),(30,26,3,NULL,NULL),(32,27,3,NULL,NULL);
/*!40000 ALTER TABLE `product_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`),
  CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,'/uploads/partner1.png',1,NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29'),(2,'/uploads/partner2.png',2,NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29'),(3,'/uploads/Mon-Aug-2017_6ea731d6c11aa3707f06ad42a4ba8fca.jpg',4,NULL,'2017-08-28 15:55:38','2017-08-28 15:55:38'),(4,'/uploads/Tue-Aug-2017_ac52cc83f66582d7193cb9d88d123a58.jpg',19,NULL,'2017-08-29 13:57:37','2017-08-29 13:57:37'),(5,'/uploads/Tue-Aug-2017_d5bd3c3d6fb3808104268655c6644427.jpg',19,NULL,'2017-08-29 13:57:52','2017-08-29 13:57:52'),(6,'/uploads/Tue-Aug-2017_c030e1d09898d1d34987e075c43a51de.jpg',19,NULL,'2017-08-29 13:57:52','2017-08-29 13:57:52'),(7,'/uploads/Tue-Aug-2017_c030e1d09898d1d34987e075c43a51de.jpg',19,NULL,'2017-08-29 13:58:35','2017-08-29 13:58:35'),(8,'/uploads/Tue-Aug-2017_d5bd3c3d6fb3808104268655c6644427.jpg',19,NULL,'2017-08-29 13:58:36','2017-08-29 13:58:36'),(9,'/uploads/Tue-Aug-2017_3fbc7c6dcc19b73d83e161d7768c8667.jpg',18,NULL,'2017-08-29 14:00:47','2017-08-29 14:00:47'),(10,'/uploads/Tue-Aug-2017_711221febade2807d21b66839df9c9c6.jpg',18,NULL,'2017-08-29 14:01:00','2017-08-29 14:01:00'),(11,'/uploads/Tue-Aug-2017_2a26d722332ccac513f190ab7465ee35.jpg',18,NULL,'2017-08-29 14:01:07','2017-08-29 14:01:07'),(12,'/uploads/Mon-Sep-2017_d19b3614a5210a6b0924a212d47e45e2.jpg',21,'2017-09-27 12:34:37','2017-09-25 16:03:04','2017-09-27 12:34:37'),(13,'/uploads/Mon-Sep-2017_f3ccdd27d2000e3f9255a7e3e2c48800.jpg',23,NULL,'2017-09-25 17:13:06','2017-09-25 17:13:06'),(14,'/uploads/Mon-Sep-2017_df099172d38371d7de79e1e33316e81f.jpg',25,NULL,'2017-09-25 18:01:14','2017-09-25 18:01:14'),(15,'/uploads/Mon-Sep-2017_cf0321ece4efbee40b2278699488f9a9.jpg',25,NULL,'2017-09-25 18:01:14','2017-09-25 18:01:14'),(16,'/uploads/Mon-Sep-2017_2efa611257e9dda0d0a1e0e225681194.jpg',25,NULL,'2017-09-25 18:01:18','2017-09-25 18:01:18'),(17,'/uploads/Wed-Sep-2017_899f1bf0e2159aa6ee70cb3b1afd77b2.jpg',21,NULL,'2017-09-27 12:35:47','2017-09-27 12:35:47'),(18,'/uploads/Wed-Sep-2017_80d3593be7467c6e0a2b4f27d3157fd8.jpg',21,NULL,'2017-09-27 12:37:00','2017-09-27 12:37:00');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `content_ar` text COLLATE utf8mb4_unicode_ci,
  `entity_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_entity_id_foreign` (`entity_id`),
  CONSTRAINT `services_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,NULL,NULL,'services Content loreum ipsum','services Content loreum ipsum',2,'2017-09-16 13:34:39','2017-09-16 13:34:39',NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slider_entity_id_foreign` (`entity_id`),
  CONSTRAINT `slider_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'title 1','عنوان 1','/uploads/partner1.png',1,'2017-08-29 14:24:19','2017-08-24 11:18:29','2017-08-29 14:24:19'),(2,'title 1','عنوان 1','/uploads/partner2.png',1,'2017-08-29 14:24:23','2017-08-24 11:18:29','2017-08-29 14:24:23'),(3,'title 2','عنوان 2','/uploads/partner2.png',2,'2017-08-29 14:24:26','2017-08-24 11:18:29','2017-08-29 14:24:26'),(4,'title 2','عنوان 2','/uploads/partner1.png',2,'2017-08-29 14:24:28','2017-08-24 11:18:29','2017-08-29 14:24:28'),(5,'title 2','عنوان 2','/uploads/partner2.png',3,'2017-08-29 14:24:31','2017-08-24 11:18:29','2017-08-29 14:24:31'),(6,'title 2','عنوان 2','/uploads/partner1.png',3,'2017-08-29 14:24:34','2017-08-24 11:18:29','2017-08-29 14:24:34'),(7,'1','1','/uploads/Sat-Sep-2017_7d835d4521cdcef31bc408d224917ed2.png',3,NULL,'2017-08-29 14:25:07','2017-09-09 21:47:16'),(8,'2','2','/uploads/Sat-Sep-2017_46d0e2932e2be5ea04545a87ee135aa4.png',3,NULL,'2017-08-29 14:25:27','2017-09-09 21:47:48'),(9,'3','3','/uploads/Sat-Sep-2017_46d0e2932e2be5ea04545a87ee135aa4.png',3,NULL,'2017-08-29 14:26:07','2017-09-09 21:48:53'),(10,'3','3','/uploads/Tue-Sep-2017_4d9b77d19b4a4ec9b3408f1c0715d660.png',3,'2017-09-09 21:53:46','2017-08-29 14:26:28','2017-09-09 21:53:46'),(11,'5','5','/uploads/Tue-Aug-2017_9f8d342693f9a40a3b97753bd1f3e587.jpg',2,NULL,'2017-08-29 14:41:25','2017-08-29 14:41:25'),(12,'11','1','/uploads/Tue-Aug-2017_10daf17f29ffa0632e3c5008048111dd.jpg',1,NULL,'2017-08-29 19:03:06','2017-08-29 19:03:06');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `entity_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `team_entity_id_foreign` (`entity_id`),
  CONSTRAINT `team_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'name 1','اسم 1','Alsafwa@alsafwa.com',1,NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29'),(2,'name 2','اسم 2','Alsafwa2@alsafwa2.com',2,NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$9LEDnB3IsFSWRUEIzmaNgug0RJlh6nJCZ3c9Y4FL0nh1zwQQrQb2K',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mohamed salah','m.alsayed.salah@gmail.com','$2y$10$IGpbsgGSGkJbMAmJ/.kFbOMPXTL3GCYVy7UX7ZlTXuhKWgHtzTajS','01097465056','/uploads/user1.png','admin',NULL,'FcDKEGbgzFFYZoFcOpWnwCi2ubgk20A1ixUQ4B7ZUmkzs9VLSeT6coeahbSn','2017-08-24 11:18:29','2017-08-24 11:18:29'),(2,'Nahas','nahas@gmail.com','$2y$10$UBoodVyhMJuiRXruT3zL0uNIfL3Dd0nKoRS.VkWfnp/cs4/msKnCy','01286890685','/uploads/user2.png','admin',NULL,NULL,'2017-08-24 11:18:29','2017-08-24 11:18:29'),(3,'Meqdad','MHM@alsafwa.me','$2y$10$oltkskrOOayoJxzlwaKRb.h1.7h9pguMOgT3j.Snt4GCyu2U3y2IO','+971506437625',NULL,'GM',NULL,'Y6NbDrT1HDq42rDR5EqdWJslBa30GhFFS7RECM9NWqdbS2U9UtqSx1C8IEct','2017-09-27 13:01:29','2017-09-27 13:01:53'),(4,'Hisham Farahat','HSF@alsafwa.me','$2y$10$ySkhu.EL/RToiOHFoYYTtep.B0gzn88MslCOFo88B9tvJDOQ.Obp.','+971508112443',NULL,'President',NULL,'E03Gpe6ngMIMea9SJpW5ixcfd9ln60CCngKLiTcMWhFbgjLIkFYlgsiWVWXy','2017-09-27 14:23:22','2017-09-27 16:13:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-28 11:00:34
