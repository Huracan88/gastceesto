<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create(['name'=>'Avelino Garcia','email'=>'jose.garcia.a@salud.qroo.gob.mx','password'=>'agarcia']);
        \App\Models\User::factory()->create(['name'=>'Andres Pinto','email'=>'andres.pinto@salud.qroo.gob.mx','password'=>'apinto']);
        \App\Models\User::factory()->create(['name'=>'Azalea Barrera','email'=>'azalea.barrera@salud.qroo.gob.mx','password'=>'abarrera']);
        \App\Models\User::factory()->create(['name'=>'Mario Martinez','email'=>'mario.martinez@salud.qroo.gob.mx','password'=>'mmartinez']);
        \App\Models\User::factory()->create(['name'=>'Luis Tellez','email'=>'luis.tellez@salud.qroo.gob.mx','password'=>'ltellez']);
        \App\Models\User::factory()->create(['name'=>'Jose Soberanis','email'=>'jose.soberanis@salud.qroo.gob.mx','password'=>'jsoberanis']);
        \App\Models\User::factory()->create(['name'=>'Laralila Aguilar','email'=>'laralila.aguilar@salud.qroo.gob.mx','password'=>'laguilar']);
        \App\Models\User::factory()->create(['name'=>'Ricardo May','email'=>'ricardo.may@salud.qroo.gob.mx','password'=>'rmay']);
        \App\Models\User::factory()->create(['name'=>'Margarita Che','email'=>'margarita.che@salud.qroo.gob.mx','password'=>'mche']);
        \App\Models\User::factory()->create(['name'=>'Veneralda Rosado','email'=>'veneralda.rosado@salud.qroo.gob.mx','password'=>'vrosado']);
        \App\Models\User::factory()->create(['name'=>'Norman Angulo','email'=>'norman.angulo@salud.qroo.gob.m','password'=>'nangulo']);



        $sql = 'INSERT INTO guests (`unit`,`group`,`employee`,`years`,`name`,`zone`,`number`) VALUES ';

         $sql.= "   ('HGCOZ','Estatal',5064,25,'ALVAREZ GUADARRAMA ENRIQUE','NORTE',30),
                    ('OFCEN','Estatal',1099,35,'CETINA DEL RIO GUADALUPE','SUR',1),
                    ('HGCCN','Estatal',5491,25,'USCANGA MONTALVO ROCIO','NORTE',15),
                    ('HGFCP','Federal',16,35,'ALFARO COH DEYSI','CENTRO',7),
                    ('HGCHE','Federal',23,25,'ALVAREZ CARREON JUANA','SUR',10),
                    ('JUSA2','Federal',45,30,'AVALOS GONZALEZ MARIA DEL REFUGIO','NORTE',51),
                    ('JUSA2','Estatal',5065,25,'ANDRADE GONZALEZ MARIA DEL REFUGIO','NORTE',74),
                    ('JUSA2','Federal',56,30,'ALVAREZ LOPEZ MIRIAM DE JESUS','NORTE',52),
                    ('HGCHE','Federal',62,30,'ARAGON MARTIN CARLOS ALFONSO','SUR',21),
                    ('HGCCN','Federal',71,35,'ABRAHAM MARTIN JOSE SANTIAGO','NORTE',1),
                    ('JUSA1','Estatal',77,20,'ARGAEZ NOH GELMY PATRICIA','SUR',6),
                    ('HGFCP','Federal',92,30,'ADAME PEREZ SERGIO','CENTRO',16),
                    ('JUSA2','Federal',94,25,'ALVAREZ RAMIREZ DOMINGA','NORTE',66),
                    ('HGCHE','Federal',116,25,'ANDRADE UC AYDE NOEMI','SUR',11),
                    ('JUSA1','Federal',126,25,'AREVALO ARROYO XOCHILKALI','SUR',39),
                    ('JUSA3','Estatal',5073,30,'AKE BALAM EVELIA','CENTRO',11),
                    ('JUSA2','Estatal',5075,25,'ARMENTA NAVARRETE RAMON','NORTE',75),
                    ('JUSA2','Estatal',5076,25,'AKE POLANCO NEYDI MARIA','NORTE',70),
                    ('HGFCP','Estatal',5080,25,'AVILES GOMEZ CARLOS','CENTRO',33),
                    ('JUSA1','Federal',191,30,'ARIAS LOPEZ MAGDALY','SUR',37),
                    ('OFCEN','Federal',212,35,'AVILA SANCHEZ SILVIA ELENA','SUR',68),
                    ('JUSA2','Federal',236,30,'ANCONA CORAL JOSE ANASTACIO','NORTE',53),
                    ('HGCCN','Estatal',5082,25,'ARROYO CAMPOHERMOSO CARLOS','NORTE',8),
                    ('JUSA1','Federal',266,35,'APODACA NAFARRATE RIGOBERTO','SUR',36),
                    ('JUSA1','Federal',278,35,'ALCOCER SANCHEZ LANDY MARIA','SUR',37),
                    ('JUSA3','Federal',288,25,'AC SUAREZ JESUS','CENTRO',75),
                    ('OFCEN','Federal',5084,25,'AGUILAR BORGES MARIA CRISTINA','SUR',95),
                    ('LEST','Estatal',5085,25,'AGUILAR CEN NORMA MARISOL','SUR',104),
                    ('OFCEN','Estatal',5087,25,'AGUILAR GUZMAN MARIA FIDELINA','SUR',112),
                    ('JUSA2','Federal',329,30,'AGUILAR LOPEZ MA. CRISTINA','NORTE',56),
                    ('JUSA1','Federal',336,35,'ARGUELLES MORALES MARIA DEL CARMEN','SUR',38),
                    ('HGCHE','Federal',345,25,'ALCUDIA NUÑEZ LEYDI MARLENE','SUR',12),
                    ('HGCCN','Estatal',5092,25,'AGUILAR PANTOJA CATALINA DEL ROSARIO','NORTE',3),
                    ('JUSA1','Federal',363,25,'ANTUNES ROSALES MA. PETRA','SUR',40),
                    ('HGCHE','Estatal',5096,25,'ANGULO VILLANUEVA MARIA ESTELA','SUR',16),
                    ('OFCEN','Estatal',5100,25,'BLANCO COCOM JESUS EDAENA','SUR',113),
                    ('JUSA3','Federal',428,25,'BAUTISTA GOMEZ TERESA','CENTRO',76),
                    ('JUSA1','Federal',482,30,'BARRADAS SANCHEZ RAUL','SUR',38),
                    ('JUSA1','Estatal',5113,25,'BARRIENTOS TORRES GODELIBAR','SUR',58),
                    ('HIPDC','Federal',514,30,'BERMUDEZ MELENDEZ IGNACIO','NORTE',32),
                    ('OFCEN','Federal',5118,25,'BERNES MADRID MARITZA DE LOS ANGELES','SUR',96),
                    ('JUSA3','Federal',523,20,'BELTRAN PERAZA RIGEL ANTONIO','CENTRO',21),
                    ('JUSA1','Estatal',5122,25,'BOBADILLA CASTRO WILMA TERESA','SUR',62),
                    ('HGCHE','Estatal',5123,25,'BORJA GODOY VICTOR GUILLERMO','SUR',17),
                    ('JUSA2','Federal',585,25,'BUENDIA DURAN LIZBETH ALICIA','NORTE',67),
                    ('JUSA1','Federal',596,25,'BURGOS QUIJANO RUBI DELMI DE JESUS','SUR',41),
                    ('HGCHE','Federal',605,25,'BUENROSTRO VEGA JESUS DE ATOCHA','SUR',14),
                    ('JUSA1','Estatal',5126,25,'CANUL ALCOCER NOEMI','SUR',63),
                    ('HMIMO','Estatal',5128,25,'CAHUICH BABB LEA JUDITH','SUR',53),
                    ('BSCCN','Federal',672,30,'CASTILLO CETINA EDGAR MAURILIO','NORTE',57),
                    ('HGCHE','Federal',673,30,'CASADOS CANUL EPIFANIA','SUR',22),
                    ('JUSA2','Estatal',5132,25,'CASTILLO CETINA FELIPE ANASTACIO','NORTE',77),
                    ('HGCCN','Federal',683,30,'CARMONA CAMPOS GRACIELA','NORTE',4),
                    ('HGCHE','Federal',691,30,'CAHUICH CHABLE JOSE JAVIER','SUR',23),
                    ('JUSA1','Federal',701,45,'CAAMAL CORREA LETICIA DEL SOCORRO','SUR',2),
                    ('JUSA2','Federal',714,35,'CAUICH CHE MARIA NOEMI','NORTE',59),
                    ('JUSA3','Federal',730,25,'CAUICH CAN SANTIAGO VIRGILIO','CENTRO',77),
                    ('JUSA3','Federal',735,30,'CAUICH CHUC TERESA','CENTRO',62),
                    ('JUSA1','Federal',764,25,'CAHUICH DZUL MARGARITA','SUR',42),
                    ('HGCHE','Federal',781,35,'CASTILLO EUAN VIDELMA ADELA','SUR',16),
                    ('HGCHE','Estatal',5137,25,'CHAN GOMEZ MARIA LUISA','SUR',18),
                    ('JUSA2','Federal',817,25,'CAMPOY INCLAN CARLOS ROMAN','NORTE',70),
                    ('JUSA1','Estatal',5138,25,'CASTILLO LOPEZ JACKELINE','SUR',64),
                    ('JUSA3','Federal',872,25,'CHAN MONDRAGON JOSEFINA','CENTRO',78),
                    ('HIPDC','Estatal',5142,25,'CHAVEZ MENDOZA ZULMA PATRICIA','NORTE',32),
                    ('JUSA3','Estatal',5143,25,'CARRILLO NARVAEZ HECTOR LUIS','CENTRO',95),
                    ('JUSA1','Estatal',909,25,'CABALLERO ORTIZ SANTA PATRICIA','SUR',61),
                    ('JUSA2','Estatal',5145,25,'CABRERA PEREZ CARLOS ENRIQUE','NORTE',78),
                    ('JUSA1','Estatal',5146,25,'CHAN PAT EDGAR HEBERTH','SUR',65),
                    ('HIKKN','Estatal',5147,25,'CAUICH POOL MARIA DE LA LUZ','NORTE',103),
                    ('JUSA2','Federal',951,25,'CARDENAS QUIJANO ALAN AUGUSTO','NORTE',68),
                    ('HMIMO','Federal',1016,25,'CABRERA TRINIDAD EDUARDO','SUR',35),
                    ('HGCHE','Estatal',5151,25,'CARDENAS TEJERO LUCELY','SUR',22),
                    ('JUSA3','Federal',1033,30,'CAUICH UITZIL HERMELINDA','CENTRO',63),
                    ('HMIMO','Federal',5152,25,'CALDERON ZAVALEGUI ELMER ROLANDO','SUR',36),
                    ('JUSA2','Estatal',5153,25,'CETINA ALCOCER JOSE ARMIN','NORTE',79),
                    ('JUSA3','Estatal',5154,25,'CERVANTES ALVAREZ MA. MARICELA','CENTRO',96),
                    ('JUSA3','Federal',1063,20,'CEN BLANCO JORGE ARMANDO','CENTRO',22),
                    ('HGCOZ','Federal',1097,35,'CLEMENTE ROSARIO ALEJANDRINA','NORTE',25),
                    ('HGCHE','Federal',1098,35,'CEBALLOS RUIZ ANGEL OMAR','SUR',18),
                    ('JUSA2','Federal',1100,20,'CEN ROMERO OFELIA MICAELA','NORTE',15),
                    ('JUSA2','Federal',1101,30,'CEDILLO ROCHA SILVIA','NORTE',54),
                    ('HMIMO','Estatal',5158,25,'CHIMAL GONZALEZ RUBICELA','SUR',43),
                    ('HGCHE','Federal',1127,25,'CICLER GARCIA WILLIAM','SUR',15),
                    ('LEST','Estatal',5162,25,'CID RODRIGUEZ OMAR FERNANDO','SUR',105),
                    ('JUSA3','Federal',1151,35,'CHI TUN NORMA YOLANDA','CENTRO',64),
                    ('HGFCP','Federal',1159,35,'CORCUERA ARCE RAUL','CENTRO',8),
                    ('JUSA1','Estatal',5163,25,'COCOM ALCOCER ROSINA LUCELY','SUR',66),
                    ('HGCHE','Estatal',5166,25,'COBOS CANUL DULCE ISABEL','SUR',23),
                    ('HGCCN','Estatal',5167,25,'CORDOBA CASTRO SALATIEL','NORTE',4),
                    ('JUSA1','Federal',1196,35,'COHUO GALAZ CARLA LETICIA','SUR',39),
                    ('OFCEN','Estatal',5168,25,'COLONIA GOMEZ GERMAN ALEJANDRO','SUR',114),
                    ('JUSA3','Federal',1204,25,'COHUO GALAZ MIRIAM NOEMI','CENTRO',79),
                    ('JUSA1','Federal',1211,35,'COHUO GALAZ SILVIA RUBI','SUR',40),
                    ('HGFCP','Estatal',5171,25,'CONDE MONTALVO DAVID ELISEO','CENTRO',42),
                    ('HGCHE','Federal',1235,25,'CONTRERAS NAVARRETE ALEJANDRA','SUR',16),
                    ('HMIMO','Estatal',5174,25,'CORONA ORTIZ LIGIA MARIA','SUR',44),
                    ('JUSA3','Estatal',5175,25,'CORREA PEREZ ANDRES','CENTRO',97),
                    ('HIIMU','Federal',1251,25,'CORONADO ROJAS ANTONIO','NORTE',34),
                    ('HMIMO','Estatal',5180,25,'CORONA US THELMA AMIRA','SUR',45),
                    ('HMIMO','Estatal',5181,25,'COPO XOOL LEYDY MARIA','SUR',46),
                    ('HGCCN','Estatal',5183,25,'DE LA CRUZ CORDOVA ORLANDO','NORTE',5),
                    ('HMIMO','Estatal',5185,25,'CUELLAR FLORES VICTORIA','SUR',47),
                    ('JUSA1','Federal',1315,35,'CRUZ MORENO ANA ROSILIA CANDELARIA','SUR',41),
                    ('JUSA2','Federal',1321,30,'CRUZ MORALES JOSE','NORTE',58),
                    ('OFCEN','Estatal',5193,25,'DIAZ FERNANDEZ ALONSO','SUR',115),
                    ('JUSA3','Estatal',5194,25,'DIAZ HERNANDEZ JORGE LUIS','CENTRO',98),
                    ('HIPDC','Federal',1402,30,'DIEGUEZ MONTES ELSA','NORTE',33),
                    ('HGCCN','Estatal',5195,25,'DIAZ MACHUCA JOSE RAFAEL','NORTE',9),
                    ('HIJMM','Federal',1410,30,'DIAZ PERERA MARIA TIMOTEA DEL ROSARIO','CENTRO',35),
                    ('JUSA2','Estatal',5197,25,'DORANTES CHE JOSE MANUEL JESUS','NORTE',80),
                    ('HGCHE','Federal',1428,25,'DOMINGUEZ ITZA VILMA','SUR',18),
                    ('JUSA2','Estatal',5198,25,'DORANTES PACHECO ALVARO','NORTE',71),
                    ('JUSA2','Federal',1468,25,'DZUL DOMENZAIN JOSE BENITO','NORTE',69),
                    ('JUSA1','Federal',1485,35,'DURAN PADILLA SERGIO ENRIQUE','SUR',43),
                    ('OFCEN','Estatal',5202,25,'DUARTE SABIDO ALEJANDRA','SUR',116),
                    ('JUSA1','Federal',1518,25,'ESTRADA  LUIS ALONSO','SUR',44),
                    ('HGCHE','Estatal',5207,25,'ESTRELLA CORDOVA CARLOS ABEL','SUR',24),
                    ('JUSA3','Federal',1541,25,'ESPEJO GONZALEZ RITA IRENE','CENTRO',74),
                    ('HGFCP','Federal',1547,35,'ESTRELLA PALOMO LANDY LUCY ANTONIA','CENTRO',9),
                    ('HMIMO','Estatal',5210,25,'EUAN PUC ELVIA CANDELARIA','SUR',54),
                    ('LEST','Estatal',5214,25,'FALCON CHIMAS DULCE MARIA','SUR',106),
                    ('JUSA2','Estatal',5215,25,'FACIO GONZALEZ SOCORRO','NORTE',81),
                    ('HIPDC','Federal',1635,25,'FRANCO NOVELO EDDAR ALLAN','NORTE',37),
                    ('JUSA1','Federal',1640,25,'FABELA TORRES MARIA ALTAGRACIA','SUR',45),
                    ('HGCCN','Federal',1641,25,'FERNANDEZ AGUILAR JOSE ANTONIO','NORTE',2),
                    ('UDCTM','Federal',1660,30,'FERRAL MANZANARES EDID','SUR',39),
                    ('HGCCN','Estatal',5217,25,'FERRER RAMIREZ ANA MARIA','NORTE',10),
                    ('HGCHE','Federal',1672,35,'FILOBELLO ROMERO NEFTALI','SUR',20),
                    ('JUSA2','Estatal',5219,25,'FLORES ARAGON VALENTINA','NORTE',82),
                    ('HGCHE','Federal',1684,25,'FONSECA CANUL MARIA ISABEL','SUR',19),
                    ('HMIMO','Estatal',5220,25,'FLORES CORONA MARIA RAQUEL','SUR',48),
                    ('HGFCP','Federal',1690,25,'FLORES GOMEZ JOSE ESTEBAN','CENTRO',7),
                    ('HGCHE','Federal',1737,25,'FURIO VARGAS ROSAURA','SUR',20),
                    ('JUSA1','Estatal',5227,25,'GARCIA ARTEAGA CLAUDIA','SUR',67),
                    ('HGCCN','Estatal',5232,25,'GARCIA GONGORA FANNY DEL CARMEN','NORTE',11),
                    ('HGCCN','Federal',1798,35,'GARCIA HERNANDEZ GILBERTO','NORTE',2),
                    ('HGCCN','Estatal',5237,25,'GARCIA METRI FREDDY MIGUEL','NORTE',12),
                    ('HGCHE','Federal',1840,25,'GARCIA POLANCO CONCEPCION GUADALUPE','SUR',21),
                    ('HGFCP','Estatal',5239,25,'GARCIA POOT PROCORO','CENTRO',34),
                    ('JUSA3','Estatal',5240,25,'GALICIA QUIÑONES JUANA','CENTRO',99),
                    ('HGCHE','Federal',1867,35,'GAMIÑO VILLA ELSA','SUR',21),
                    ('JUSA3','Federal',1904,25,'GOMEZ COBOS ASUNCION','CENTRO',90),
                    ('HGCHE','Federal',1910,40,'GOROCICA CAB CLARA MARIA','SUR',3),
                    ('HMIMO','Estatal',5247,30,'GONGORA CONTRERAS CARMELA CONCEPCION','SUR',5),
                    ('LEST','Federal',1913,35,'GONGORA CAN FERNANDO','SUR',67),
                    ('HMIMO','Federal',1914,20,'GOMEZ CACERES MARIA GUADALUPE','SUR',1),
                    ('JUSA3','Federal',1933,25,'GONZALEZ DIAZ ADRIAN','CENTRO',80),
                    ('JUSA1','Estatal',5252,25,'GONZALEZ GONZALEZ MINERVA','SUR',68),
                    ('HGCHE','Estatal',5253,25,'GONZALEZ JUAREZ OLGA ISABEL','SUR',19),
                    ('JUSA1','Federal',1973,30,'GOMEZ MONTENEGRO ALIRIA','SUR',41),
                    ('JUSA3','Federal',1990,30,'GONZALEZ MEDINA SAYDA CELINA','CENTRO',64),
                    ('HGCCN','Estatal',5254,25,'GOMEZ PEREZ ADRIAN','NORTE',13),
                    ('OFCEN','Federal',2011,35,'GONZALEZ PELAYO LANDY DEL CARMEN','SUR',69),
                    ('HIPDC','Federal',2013,25,'GONZALEZ PEREZ ROSAURA','NORTE',38),
                    ('HGCHE','Federal',2017,25,'GONZALEZ QUINTANILLA OLGA MARIA','SUR',22),
                    ('OFCEN','Federal',2039,25,'GODOY TUZ MAGNOLIA ESTHER','SUR',91),
                    ('HGCCN','Federal',2047,25,'GONGORA XIU RAQUEL ANGELICA','NORTE',3),
                    ('HGCHE','Federal',2056,45,'GUZMAN ALBA OLGA','SUR',1),
                    ('HGCHE','Federal',2069,25,'GUERRERO CASARES MARCELA','SUR',23),
                    ('BSCHE','Estatal',5263,25,'GUERRERO SALGUERO MARIA MARINA','SUR',1),
                    ('JUSA1','Estatal',5270,20,'HERNANDEZ CRUZ SOFIA','SUR',4),
                    ('HGCHE','Estatal',5271,25,'HERNANDEZ DIAZ GENER JOSUE','SUR',25),
                    ('JUSA3','Federal',2169,35,'HERNANDEZ GUZMAN OLIVIA','CENTRO',66),
                    ('HGFCP','Federal',2172,30,'HERNANDEZ GARCIA MARIA VICTORIA','CENTRO',17),
                    ('JUSA1','Federal',2183,30,'HERNANDEZ JAIMES NEOFITA','SUR',42),
                    ('HGFCP','Estatal',5275,25,'HERRERA MEDINA RENAN ELEAZAR','CENTRO',43),
                    ('OFCEN','Federal',2263,35,'HOYOS CHUC NIDELVIA','SUR',70),
                    ('HIJMM','Federal',2272,35,'HUCHIN DZIB BERTHA ADELAIDA','CENTRO',33),
                    ('LEST','Estatal',5284,25,'ISTE MARTINEZ NANCY NORA','SUR',107),
                    ('HMIMO','Estatal',2290,25,'ISTE MARTINEZ RAFAEL','SUR',57),
                    ('JUSA1','Federal',2291,25,'IXTEPAN MEDINA SULMA DELIA','SUR',47),
                    ('HMIMO','Federal',2301,30,'IZQUIERDO LEPE LENNIE DELILAH','SUR',31),
                    ('HGCCN','Federal',2311,35,'JAVIER PUC CARMINA','NORTE',3),
                    ('JUSA3','Federal',2346,30,'JIMENEZ MENDEZ ARCELIA','CENTRO',65),
                    ('HMIMO','Estatal',5287,25,'JIMENEZ MAY RAYMUNDO','SUR',49),
                    ('JUSA3','Federal',2353,25,'JIMENEZ POOL JOSE ALFREDO','CENTRO',81),
                    ('BSCHE','Federal',2359,30,'JIMENEZ SALGADO MARIA MARGARITA','SUR',1),
                    ('HGCOZ','Federal',2385,25,'KOYOC KU NERI GRACIELA','NORTE',33),
                    ('JUSA2','Federal',2430,35,'LARA ORDOÑEZ MARIA DE LOS ANGELES','NORTE',60),
                    ('JUSA1','Federal',2439,35,'LARA RUIZ RAQUEL','SUR',44),
                    ('LEST','Estatal',5297,25,'LEON LANDERO FABIOLA','SUR',108),
                    ('JUSA2','Federal',2471,30,'LEON POOL DULCE MARIA','NORTE',59),
                    ('JUSA2','Federal',2472,20,'LEON POOL MARISOL','NORTE',16),
                    ('JUSA1','Federal',2476,25,'LEZAMA SALGADO LEOBARDO ARTURO','SUR',48),
                    ('HGCHE','Federal',2485,30,'LIMA CASTILLO SAIRA','SUR',24),
                    ('JUSA1','Federal',2504,25,'LOPEZ ALCOCER MARIA VICTORIA','SUR',49),
                    ('JUSA2','Estatal',5298,30,'LOZANO CASANOVA GELMY YOLANDA','NORTE',10),
                    ('JUSA1','Estatal',5299,25,'LOPEZ DAVILA LILIA MILAGROS','SUR',60),
                    ('JUSA1','Federal',2545,25,'LOPEZ GARNICA PAULA ALICIA','SUR',50),
                    ('HGCHE','Federal',2548,30,'LOPEZ HERNANDEZ NESTOR ANTONIO','SUR',29),
                    ('HMIMO','Estatal',2548,30,'LOPEZ HERNANDEZ NESTOR ANTONIO','SUR',2),
                    ('HGCHE','Federal',1220,35,'LOPEZ RUIZ ARGELIA NOEMI','SUR',19),
                    ('JUSA2','Estatal',5301,25,'LOZANO SANCHEZ CARLA GABRIELA KARINA','NORTE',72),
                    ('HIPDC','Federal',2614,30,'LOPEZ TUN ROCELY ADRIANA','NORTE',34),
                    ('JUSA2','Federal',2619,20,'LOPEZ VILLALOBOS ANA LUISA','NORTE',17),
                    ('JUSA2','Federal',2643,25,'LUGO MOGUEL GERARDO VENTURA','NORTE',71),
                    ('HGFCP','Estatal',5304,25,'MARTINEZ ASCENCIO DORA MARIA','CENTRO',36),
                    ('HGCHE','Federal',2660,30,'MAYO ALPUCHE LETICIA DEL SOCORRO','SUR',25),
                    ('HGCHE','Federal',5305,25,'MARTINEZ ACOSTA SINUHE','SUR',31),
                    ('HGFCP','Estatal',5307,30,'MALDONADO CANCHE GLADIS JOSEFINA','CENTRO',3),
                    ('HGFCP','Federal',2692,35,'MAY CASTILLO LIGIA BEATRIZ','CENTRO',10),
                    ('HIJMM','Federal',2694,30,'MARTIN CASTILLO MARTIN','CENTRO',36),
                    ('JUSA2','Federal',2698,45,'MARTINEZ CORTES ROBERTO PASTOR','NORTE',5),
                    ('HIKKN','Federal',2700,40,'MARIANO CANUL RAFAELA VICTORIA','NORTE',1),
                    ('JUSA2','Federal',2701,25,'MARTINEZ CONTRERAS RAQUEL','NORTE',72),
                    ('JUSA1','Federal',2720,35,'MAY  FERNANDO','SUR',45),
                    ('HGCHE','Federal',2721,20,'MARTINEZ FARFAN MIGUEL ANGEL','SUR',3),
                    ('HGCOZ','Federal',2728,35,'MARRUFO GONZALEZ GERMAN','NORTE',26),
                    ('JUSA2','Federal',2729,20,'MANZANO GIL MARIA ISABEL','NORTE',18),
                    ('JUSA1','Federal',2735,35,'MARTIN GONZALEZ ROSA LIDIA','SUR',46),
                    ('HGCCN','Federal',2751,30,'MADERO JARAMILLO BERTHA ALICIA','NORTE',5),
                    ('HGFCP','Estatal',5327,25,'MAY MATOS ALEJANDRO','CENTRO',37),
                    ('HIJMM','Estatal',5323,30,'MARTIN MARTIN MARIA CRISTINA','CENTRO',8),
                    ('JUSA1','Estatal',5324,25,'MARQUEZ MONZON GUADALUPE','SUR',59),
                    ('HGCHE','Federal',2774,30,'MARRUFO MADRID LUIS GREGORIO','SUR',26),
                    ('LEST','Estatal',5326,25,'MARTINEZ MUÑOZ MAYRA MAGDALENA','SUR',109),
                    ('HGCOZ','Federal',2781,40,'MAYEN MORELOS RAMON','NORTE',4),
                    ('JUSA1','Federal',2809,30,'MANZANILLA PEREZ JULIETA EUGENIA','SUR',46),
                    ('HGFCP','Federal',2842,35,'MARTINEZ RODRIGUEZ RAMON','CENTRO',11),
                    ('HMIMO','Federal',2853,35,'MATAMOROS SOSA MIGUEL ANGEL','SUR',30),
                    ('JUSA1','Federal',2854,25,'MARTINEZ SANDOVAL NOE','SUR',51),
                    ('HGCHE','Federal',2858,25,'MARTIN TZUC ALICIA','SUR',24),
                    ('HGCHE','Federal',2871,30,'MARIN VILLANUEVA ELVIA LORENA','SUR',27),
                    ('HGCCN','Estatal',5330,25,'MAGAÑA VIRGEN JUAN MANUEL','NORTE',14),
                    ('HGCHE','Estatal',5332,25,'MENDEZ BETETA JULIA MARIA','SUR',26),
                    ('OFCEN','Federal',2913,25,'MEDINA CARBAJAL NANCY GUADALUPE','SUR',92),
                    ('BSCCN','Federal',2917,30,'MEDINA DZIB SERGIO ORLANDO','NORTE',60),
                    ('HGCCN','Federal',2919,30,'MEDINA ESQUILIANO CLAUDINA ESTEFANIA','NORTE',6),
                    ('HGCCN','Federal',2927,40,'MEDRANO GRAJALES ADELA','NORTE',2),
                    ('JUSA1','Federal',2944,25,'MENESES LORIA ELSY ANTONIA','SUR',52),
                    ('HGCHE','Federal',2960,25,'MENDOZA MOGUEL SILVIA','SUR',25),
                    ('HGFCP','Federal',2966,25,'MEDINA OJEDA GAMALIEL','CENTRO',8),
                    ('HGCCN','Federal',2974,30,'MEDINA PALMA GABRIELA','NORTE',7),
                    ('HGCHE','Federal',2978,25,'MENDEZ PEREZ LAURA DEL CARMEN','SUR',26),
                    ('JUSA3','Federal',2992,25,'MENDOZA SANCHEZ NAHUM','CENTRO',83),
                    ('HGCCN','Federal',3003,30,'MEZA VILLEGAS PROSPERO FERNANDO','NORTE',8),
                    ('JUSA1','Federal',3005,25,'MIS AVILA LESLIE JAZMIN','SUR',53),
                    ('HGCHE','Federal',3009,20,'MIS CHIM JOSE LUIS ANTONIO','SUR',4),
                    ('JUSA2','Estatal',5343,25,'MONTEJO ALBERTO VIGDALIA','NORTE',84),
                    ('OFCEN','Federal',3071,25,'MOO CHAN MARTHA EUGENIA','SUR',93),
                    ('JUSA3','Federal',3081,20,'MORALES DIAZ ROMEL DAMIAN','CENTRO',23),
                    ('HGFCP','Estatal',5349,25,'MOO KAUIL TEOFILA','CENTRO',38),
                    ('JUSA2','Estatal',5350,25,'MORENO RENDON ROSARIO PEDRO','NORTE',85),
                    ('HMIMO','Estatal',5353,25,'MORALES SOBERANIS GINA PRICILA','SUR',50),
                    ('HGCOZ','Federal',3204,20,'NAH CANCHE MARIA AGUSTINA','NORTE',10),
                    ('JUSA1','Federal',3196,25,'NAH CATZIM FEDRA PATRICIA','SUR',54),
                    ('JUSA2','Estatal',5355,25,'NAH CATZIM GUADALUPE DEL PILAR','NORTE',73),
                    ('JUSA1','Federal',3205,45,'NAVARRO DIAZ VICTOR MANUEL','SUR',3),
                    ('JUSA2','Estatal',5357,20,'NAJERA LOPEZ GLORIA CONCEPCION','NORTE',9),
                    ('JUSA2','Estatal',5358,25,'NAAL PEREZ MARIA ISELA','NORTE',86),
                    ('HGFCP','Federal',3288,35,'OVANDO LASTRA JESUS NICOLAS','CENTRO',12),
                    ('HGCHE','Federal',3292,20,'OLAIS QUIÑONES FERNANDO ISRAEL','SUR',6),
                    ('BAC','Estatal',5364,25,'OLMEDO MARTINEZ GERARDO ALBERTO','SUR',2),
                    ('JUSA2','Estatal',5365,25,'ORTIZ CUTZ LUIS','NORTE',87),
                    ('JUSA1','Federal',3373,30,'ORTIZ TUT ROSA MARIA','SUR',43),
                    ('JUSA3','Estatal',5370,30,'ORTIZ TUZ REYNA DEL PILAR','CENTRO',12),
                    ('HGCOZ','Estatal',5374,25,'PALACIO BRAVO ALBERTO ANTONIO','NORTE',31),
                    ('JUSA1','Federal',3412,25,'PADILLA BELTRAN GERARDO','SUR',55),
                    ('HGCHE','Estatal',5375,25,'PADILLA BASULTO LINDA MARGARITA DEL ROSARIO','SUR',20),
                    ('JUSA2','Federal',3426,45,'PADILLA CETINA MARGARITA','NORTE',6),
                    ('JUSA1','Federal',3460,20,'PACHECO MARTIN SILVIA DEL CARMEN','SUR',13),
                    ('HMIMO','Estatal',5380,30,'PALOMO TUYUB ROQUE JAVIER','SUR',6),
                    ('HMIMO','Estatal',5383,25,'PEREZ ARANDA LEIDY','SUR',55),
                    ('HGCOZ','Estatal',5386,25,'PEREZ CUPUL ARACELY','NORTE',29),
                    ('JUSA2','Estatal',5387,25,'PEREZ CASAREZ FANY YESMIN','NORTE',88),
                    ('JUSA2','Estatal',5389,25,'PEREZ CAMPOS GLORIA ALICIA','NORTE',89),
                    ('JUSA3','Federal',3520,25,'PECH CRUZ MARIA NATALIA','CENTRO',84),
                    ('JUSA2','Estatal',5390,25,'PECH CASTILLO SANTIAGO','NORTE',90),
                    ('HGCOZ','Federal',3534,35,'PEREZ  ELIZABETH','NORTE',27),
                    ('JUSA3','Estatal',5393,25,'PEREZ LOPEZ PEDRO FRANCISCO','CENTRO',101),
                    ('OFCEN','Federal',3578,35,'PEREZ MUÑOZ DAVID GASTON IV','SUR',71),
                    ('HGCHE','Federal',3609,25,'PEREZ PECH MARTHA IVVONE','SUR',27),
                    ('HMIMO','Estatal',5398,25,'PEREYRA QUIJANO LORENZA','SUR',51),
                    ('HMIMO','Estatal',3616,30,'PEREZ RAMIREZ DANIEL','SUR',1),
                    ('HGCCN','Federal',3620,25,'PEREZ RODRIGUEZ MATILDE','NORTE',6),
                    ('BSCHE','Federal',3623,30,'PERAZA RAYGOZA RAMON DE JESUS','SUR',2),
                    ('JUSA1','Federal',3625,25,'PREZA RIOS SILVIA','SUR',56),
                    ('HGCHE','Federal',3652,35,'PEREZ VARGAS OLGA RUTH','SUR',22),
                    ('HIPDC','Federal',3654,35,'PEÑA XICUM PEDRO RAMON','NORTE',31),
                    ('JUSA3','Federal',3657,25,'PIX  AMELIA','CENTRO',85),
                    ('JUSA2','Federal',3669,25,'PRIEGO GOMEZ MARIA MAGDALENA','NORTE',73),
                    ('JUSA3','Federal',3678,25,'PRIETO VALLEJOS FELIPA','CENTRO',86),
                    ('HGFCP','Estatal',5404,25,'POOT BE MANUEL JESUS','CENTRO',39),
                    ('JUSA1','Federal',3685,20,'POOT CAAMAL RAUL ALBERTO','SUR',14),
                    ('OFCEN','Federal',3686,25,'POOT CORAL ROSARIO DE JESUS','SUR',94),
                    ('HGCCN','Federal',3708,25,'POOT NAHUAT FLORICELY RUBI','NORTE',4),
                    ('HGCCN','Federal',3721,20,'PORTILLO SANPEDRO ESMERALDA','NORTE',2),
                    ('JUSA3','Federal',3723,25,'PORTILLO SAMPEDRO MARGARITA','CENTRO',87),
                    ('JUSA3','Federal',3734,25,'PUGA GARCIA CATALINA','CENTRO',88),
                    ('JUSA2','Federal',3766,30,'QUE LANDERO MIGUEL','NORTE',61),
                    ('HGCCN','Federal',3767,30,'QUE LANDERO MELQUIADES','NORTE',10),
                    ('HGCCN','Federal',3786,30,'RALDA ARIAS MARIA YOLANDA','NORTE',11),
                    ('HGFCP','Federal',3795,35,'RAMIREZ CAB MARIA DEL CARMEN','CENTRO',13),
                    ('HGFCP','Federal',3815,30,'RAMIREZ GARCIA NEIDY','CENTRO',18),
                    ('HGCHE','Federal',3860,30,'RAYA TEC MARCOS ANTONIO','SUR',28),
                    ('JUSA1','Estatal',5419,30,'RANDLE VASQUEZ NOEMI','SUR',9),
                    ('JUSA1','Federal',3904,35,'REYES MARTINEZ VICTORIA','SUR',55),
                    ('JUSA1','Estatal',5425,20,'REYES ZAMUDIO LUCIANO','SUR',5),
                    ('JUSA1','Federal',3921,30,'RIVERA ARJONA ISABEL INDIRA','SUR',47),
                    ('HGFCP','Federal',3930,30,'RIVERA CUEVAS COLUMBA','CENTRO',19),
                    ('JUSA1','Federal',3934,35,'RIOS CHAN PEDRO EDILBERTO','SUR',56),
                    ('HGCCN','Federal',3936,30,'RIVERO DE DIOS JOSE RODOLFO','NORTE',12),
                    ('HGFCP','Federal',3944,35,'RIVAS HU APOLINARIA','CENTRO',14),
                    ('HGCCN','Federal',3947,25,'RIVAS HERNANDEZ MARIA DEL REFUGIO','NORTE',5),
                    ('HGCCN','Federal',3952,30,'RICARDO  LEONOR','NORTE',13),
                    ('HIPDC','Federal',3961,20,'RIOS PACHECO MONICA','NORTE',12),
                    ('HGCHE','Federal',3988,20,'ROVIRA ALCOCER RUTH ANGELICA','SUR',7),
                    ('JUSA1','Federal',3997,35,'ROSAS CORTES ALBERTO','SUR',47),
                    ('JUSA1','Federal',4001,25,'ROSADO CORREA ABRAHAM','SUR',58),
                    ('JUSA1','Federal',4011,35,'ROBLES CAMARA GRISELDA','SUR',35),
                    ('HGCCN','Federal',4017,35,'ROBERTOS CETINA MARTHA ALICIA','NORTE',4),
                    ('JUSA2','Estatal',5430,25,'ROMERO CARRILLO MIGUEL ANGEL','NORTE',91),
                    ('JUSA2','Estatal',5433,25,'ROSADO MAY FERMIN ROBERTO','NORTE',92),
                    ('JUSA2','Federal',4094,35,'RODRIGUEZ OLGUIN VERONICA','NORTE',61),
                    ('HGCCN','Federal',4099,30,'ROMAN PATIÑO MARIA ELENA','NORTE',14),
                    ('OFCEN','Federal',4108,35,'ROSADO QUITERIO OSCAR GREGORIO','SUR',72),
                    ('LEST','Estatal',5436,25,'ROSADO TUN SILVIA LETICIA','SUR',110),
                    ('OFCEN','Federal',4154,35,'RUEDA ALVARADO ETHEL GUADALUPE','SUR',73),
                    ('LEST','Estatal',5439,25,'RUEDA ALVARADO NELLY MARIA DE LOURDES','SUR',111),
                    ('HMIMO','Estatal',5441,25,'RUIZ ROJAS LEYDI ROCIO','SUR',52),
                    ('HGFCP','Estatal',5442,25,'SALAZAR BLANCO MARIA AMELIA','CENTRO',40),
                    ('HGCCN','Estatal',5444,25,'SANCHEZ CASCO GABRIELA','NORTE',6),
                    ('JUSA2','Federal',4243,35,'SANCHEZ CABRERA NAZARIO FELIPE','NORTE',62),
                    ('JUSA1','Federal',4244,25,'SALGADO CRUZ TERESA','SUR',60),
                    ('BSCHE','Federal',4245,25,'SANCHEZ CORAL VANESSA ALEJANDRA','SUR',1),
                    ('JUSA1','Federal',4284,25,'SALGADO HERNANDEZ MA. ELEAZAR','SUR',61),
                    ('OFCEN','Estatal',5457,25,'SANCHEZ MARTINEZ ROGER ARTURO','SUR',118),
                    ('HMIMO','Estatal',5458,25,'SANTA CRUZ NEGRETE EDITH','SUR',56),
                    ('HGCHE','Federal',4332,35,'SANTOS ONOFRE SANTA CATALINA','SUR',24),
                    ('JUSA2','Estatal',5462,25,'SANCHEZ ROMERO FELIX','NORTE',93),
                    ('JUSA1','Federal',17717,30,'SANCHEZ ROJO GRICELDA','SUR',48),
                    ('HGCHE','Federal',4384,20,'SANCHEZ TUN NOE YSMAEL','SUR',9),
                    ('JUSA1','Federal',4389,35,'SALAZAR VAZQUEZ JULIO MARCIAL','SUR',48),
                    ('HMIMO','Estatal',5468,35,'SANTOS ZEPEDA MARICELA','SUR',3),
                    ('JUSA1','Federal',4397,25,'SANTOS ZEPEDA MESILEMIT','SUR',62),
                    ('JUSA1','Federal',4424,25,'SEVILLA NAJERA ANDRES','SUR',63),
                    ('HIJMM','Estatal',5475,20,'SOTO MARTINEZ DENISE','CENTRO',3),
                    ('JUSA1','Federal',4482,35,'SOBREVILLA SALVADOR GUILLERMINA','SUR',49),
                    ('HMIMO','Estatal',4495,30,'SUAREZ GUERRERO NICOLAS GUSTAVO','SUR',7),
                    ('HIPDC','Federal',4509,35,'SUAREZ UH JOSE DEL CARMEN','NORTE',32),
                    ('JUSA2','Federal',4515,35,'TAH ESTRADA CANDELARIA','NORTE',63),
                    ('HGFCP','Federal',4520,30,'TAFOLLA GARCIA MARIO','CENTRO',20),
                    ('BAC','Federal',4525,30,'TAVERA ROSALES BERTHA GEORGINA','SUR',3),
                    ('HIKKN','Federal',4527,35,'TAH TUZ CANDIDA','NORTE',28),
                    ('JUSA1','Federal',4539,45,'TREJO CHAN MARIA MAGDALENA','SUR',4),
                    ('OFCEN','Federal',4543,35,'TREJO GARCIA MA. ANGELICA','SUR',74),
                    ('JUSA1','Federal',4572,35,'TOSTA ALAMILLA SIOMARA GUADALUPE','SUR',50),
                    ('HGCHE','Federal',4587,30,'TOX GOMEZ ARIEL EDUARDO','SUR',29),
                    ('HGCCN','Federal',4596,35,'TOLEDO MIRANDA ARTURO','NORTE',5),
                    ('HGCCN','Federal',4626,35,'TZUC GONZALEZ TERESITA DE JESUS','NORTE',6),
                    ('HGCCN','Federal',4632,30,'TRUJEQUE PALOMO JORGE RAMON','NORTE',15),
                    ('JUSA1','Federal',4681,35,'URZUA DE LA CRUZ MARIO','SUR',51),
                    ('JUSA1','Federal',4683,30,'URTUSASTEGUI HERNANDEZ JOSE FERNANDO','SUR',44),
                    ('JUSA1','Federal',4713,35,'VAZQUEZ CHABLE EDIE ARIEL','SUR',52),
                    ('JUSA1','Federal',4720,25,'VALLE CHI LEIDY DEL CARMEN','SUR',64),
                    ('HGCCN','Estatal',5497,25,'VADILLO CANTILLO ZUEMY ARACELLY','NORTE',7),
                    ('HGCHE','Federal',4758,20,'VAZQUEZ JIMENEZ GRACIELA CONCEPCION','SUR',8),
                    ('HIKKN','Federal',4763,20,'VALDES LOZA JULIO','NORTE',11),
                    ('JUSA2','Federal',4767,30,'VAZQUEZ LOPEZ OLGA','NORTE',49),
                    ('HMIMO','Federal',4779,40,'VAZQUEZ MORENO FELIPE','SUR',5),
                    ('HGFCP','Estatal',5505,25,'VAZQUEZ VARGAS FRANCISCO','CENTRO',41),
                    ('HMIMO','Estatal',4841,35,'VENTURA CANUL VICTOR MANUEL','SUR',4),
                    ('HGCHE','Federal',4886,35,'VILLEGAS AKE MARIA DEL ROSARIO','SUR',23),
                    ('JUSA1','Federal',4892,25,'VILLEGAS CASTILLO HORTENCIA','SUR',65),
                    ('JUSA1','Estatal',5507,25,'VILLEGAS COVIX JOSE LUIS','SUR',69),
                    ('JUSA1','Federal',4904,35,'VILLANUEVA GONZALEZ JUAN JOSE','SUR',57),
                    ('OFCEN','Estatal',5510,25,'VILLAMONTE MEJIA VICTOR GABRIEL','SUR',119),
                    ('JUSA2','Federal',4932,30,'VILLALOBOS RUIZ ANA ISABEL','NORTE',55),
                    ('HGCHE','Estatal',4946,20,'WITZIL CAAMAL MARIA VICTORIA','SUR',1),
                    ('HMIMO','Estatal',4992,30,'ZAMUDIO ANCONA RAFAEL IGNACIO','SUR',4),
                    ('OFCEN','Federal',4993,35,'ZAPATA BOJORQUEZ ANA IDULVINA','SUR',75),
                    ('JUSA3','Federal',5003,25,'ZARATE GONZALEZ JAIME SILVESTRE','CENTRO',89),
                    ('JUSA1','Federal',5014,35,'ZARATE MONTERO VICTOR MANUEL','SUR',53),
                    ('JUSA2','Estatal',5523,25,'ZUNZA RIVERO FRANCISCO','NORTE',94),
                    ('HGCOZ','Precarios',109,20,'ALVAREZ SANDOVAL MARIO','NORTE',2),
                    ('JUSA2','Precarios',1854,20,'GARCIA SALAZAR AREMY','NORTE',7),
                    ('JUSA2','Precarios',4248,20,'SANCHEZ DELGADILLO CLAUDIA','NORTE',8),
                    ('OFCEN','Federal',235,40,'ALCOCER BRAVO JOSE TRINIDAD','SUR',1),
                    ('OFCEN','Federal',239,30,'ANCONA CETINA EDILBERTO DEL CARMEN','SUR',4),
                    ('JUSA2','Federal',332,25,'AGUILAR LOPEZ GABRIEL','NORTE',2),
                    ('OFCEN','Federal',711,30,'CASTRO CARRILLO JOSE MANUEL','SUR',3),
                    ('JUSA1','Federal',736,35,'CANUL COHUO TEODORO','SUR',1),
                    ('JUSA1','Federal',2052,30,'GUTIERREZ ALCANTARA GENARO','SUR',1),
                    ('OFCEN','Federal',2959,30,'MENDOZA MORENO SERGIO','SUR',5),
                    ('JUSA2','Federal',2975,20,'MEZQUITA PEREZ JOSE GABRIEL','NORTE',1),
                    ('JUSA1','Federal',3114,25,'MONTIEL MORA MARIA ELENA','SUR',1),
                    ('JUSA2','Federal',3137,20,'MONTER RODRIGUEZ FERNANDO','NORTE',2),
                    ('JUSA1','Federal',4255,35,'SANCHEZ FERNANDEZ ANGEL','SUR',2),
                    ('JUSA2','Federal',4431,30,'SIMA ALCALA FRANCISCO DE JESUS','NORTE',2),
                    ('HGCHE','Estatal',5063,25,'AYALA ESTRADA ARACELI','SUR',21),
                    ('JUSA1','Federal',57,35,'ATAXCA LEO PEDRO LUIS','SUR',34),
                    ('HIIMU','Federal',182,30,'AVILA FRIAS MARTIN TITO','NORTE',30),
                    ('HGCHE','Federal',510,25,'BENITEZ ESPAÑA JESUS ISIDRO','SUR',13),
                    ('JUSA1','Federal',944,35,'CHAN PADILLA ROGER EFRAIN','SUR',58),
                    ('HGCHE','Federal',1065,35,'CERVERA BASTO ROGELIO ALVARO','SUR',17),
                    ('HGCHE','Federal',1312,25,'CHUC LOPEZ JOSE ALBERTO','SUR',17),
                    ('JUSA2','Federal',5187,20,'CRUZ PUJOL ADELFO ISMAEL','NORTE',19),
                    ('JUSA1','Federal',1735,30,'FUENTES PIÑA ANTONIO','SUR',40),
                    ('HGCOZ','Estatal',5244,25,'GARMA TUYU WILLIAM EDUARDO','NORTE',28),
                    ('JUSA1','Federal',1898,25,'GONGORA BARBOZA JOSE ENRIQUE II','SUR',46),
                    ('HGFCP','Estatal',5279,25,'HERNANDEZ SANTIAGO NOEL WILFRIDO','CENTRO',35),
                    ('JUSA3','Federal',2384,25,'KINIL VALENCIA JESUS ALBERTO','CENTRO',82),
                    ('HGCHE','Federal',3225,20,'NAVARRO SANCHEZ ADAN KRISSTOFERSON','SUR',5),
                    ('JUSA3','Estatal',5388,25,'PEREZ CASTRO FRANCISCO SAUL','CENTRO',100),
                    ('HGCCN','Federal',3598,30,'PEREZ ORTEGA LUIS','NORTE',9),
                    ('HGCHE','Federal',3622,25,'PEREZ RAMIREZ PORFIRIO JOEL','SUR',28),
                    ('HGCHE','Federal',4000,25,'ROSADO CORREA AMED','SUR',32),
                    ('JUSA3','Estatal',5437,25,'ROCHA VELA MIGUEL ANGEL','CENTRO',102),
                    ('JUSA2','Federal',6064,20,'SAAVEDRA YAÑEZ GUILLERMO','NORTE',20),
                    ('HGCHE','Federal',4557,25,'TEC RAMIREZ GABRIEL OMAR','SUR',9),
                    ('CSTM','Federal',4670,30,'UC MEDINA JORGE JUAN','NORTE',50),
                    ('JUSA2','Estatal',5129,25,'CANCHE BRAGA MIGUEL DE JESUS','NORTE',76),
                    ('JUSA1','Estatal',5243,30,'GARCIA ROSAS PEDRO','SUR',10),
                    ('JUSA1','Federal',4034,25,'RODRIGUEZ GUTIERREZ ELMER JESUS','SUR',59),
                    ('HGCHE','Federal',4082,25,'RODRIGUEZ MARTINEZ JUAN CARLOS','SUR',29),
                    ('HMIMO','Estatal',5438,35,'RODRIGUEZ ZAVALA REFUGIO','SUR',2),
                    ('OFCEN','Estatal',5209,25,'ESQUIVEL MELO CARLOS RAFAEL','SUR',117),
                    ('JUSA1','Federal',3664,35,'PINEDA CASTILLO LUIS ENRIQUE','SUR',54),
                    ('JUSA1','Federal',813,25,'CAMARA HIDALGO MANUEL JESUS','SUR',43),
                    ('JUSA1','Federal',1442,35,'DOMINGUEZ RODRIGUEZ ARMANDO','SUR',42),
                    ('JUSA3','Federal',1916,35,'GOMEZ CICERO JORGE ENRIQUE','CENTRO',65),
                    ('JUSA2','Estatal',5264,25,'HEREDIA ACEVEDO JOSE LUIS','NORTE',83),
                    ('JUSA1','Federal',2286,30,'IXTEPAN ALONSO NORBERTO','SUR',45),
                    ('JUSA1','Federal',3695,25,'POOT HAW DAVID FELICIANO','SUR',57),
                    ('HGFCP','Federal',5019,35,'ZARATE VERONA APOLINAR','CENTRO',15),
                    ('HGCHE','Federal',4997,25,'ZARATE CAMBRANIS ADOLFO CARLOS','SUR',30)";

         \DB::statement($sql);

    }
}
