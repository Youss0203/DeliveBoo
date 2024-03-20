<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'Tajine',
                'img_url' => 'https://media.istockphoto.com/id/1143191816/it/foto/tagine-di-pollo-tradizionale-marocchino-con-olive-e-limoni-salati.jpg?s=612x612&w=0&k=20&c=kx5ht-tNO68IwGj354V4AFzxMBcnRBg4uFk-qRNIsgU=',
                'price' => 35,
                'ingredients' => 'Carne (di solito pollo, agnello o manzo), verdure (come carote, patate, zucchine), frutta secca (come prugne, albicocche), spezie (come cumino, zenzero, cannella)',
                'visibility' => true,
                'description' => 'Il tajine è un piatto tradizionale della cucina del Nord Africa, particolarmente diffuso in Marocco',
                'restaurant_id' => 4,
            ],

            [
                'name' => 'Bastilla',
                'img_url' => 'https://media.istockphoto.com/id/1294321365/it/foto/tipico-pollo-marocchino-bisteeya-o-bastilla-su-un-piatto-bianco.jpg?s=612x612&w=0&k=20&c=ZIYfa9VUB4BWXKA25iAgvRaqFFjoXsRGf5hrMvuN0AE=',
                'price' => 70,
                'ingredients' => 'Fogli di pasta fillo, pollo o pesce, mandorle, uova, cipolle, spezie (come cannella, zafferano), zucchero a velo',
                'visibility' => true,
                'description' => 'La bastilla, conosciuta anche come pastilla o bastiya, è un piatto tradizionale della cucina marocchina, tipicamente servito come piatto principale o antipasto durante occasioni speciali e festività',
                'restaurant_id' => 5,
            ],

            [
                'name' => 'Cous Cous',
                'img_url' => 'https://media.istockphoto.com/id/175230124/it/foto/cuscus.jpg?s=612x612&w=0&k=20&c=xWokBeoeqGdMAqcfAw1nA-K8fX0ag1-C3blCXuBx0Ig=',
                'price' => 55,
                'ingredients' => 'Semola di grano duro, verdure (come carote, zucchine, cipolle), carne (di solito agnello o pollo), spezie (come curcuma, cannella, zenzero)',
                'visibility' => true,
                'description' => 'Il cous cous è un piatto tradizionale nordafricano composto principalmente da granelli di semola di grano duro, solitamente serviti come base per una varietà di salse, verdure e carne',
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Sashimi',
                'img_url' => 'https://media.istockphoto.com/id/621899966/it/foto/sashimi-di-salmone-a-fette-menu-delizioso-di-cibo-crudo-giapponese.jpg?s=612x612&w=0&k=20&c=zOiieTDFQJ7FiDfdKujo_ljzHUIRYM3YN-VQnpr_Dlg=',
                'price' => 3.50,
                'ingredients' => 'Pesce crudo',
                'visibility' => true,
                'description' => 'Il sashimi è un piatto giapponese composto da fette di pesce crudo fresco, solitamente servite senza riso e condite con salsa di soia, wasabi e zenzero marinato.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Sushi',
                'img_url' => 'https://media.istockphoto.com/id/1053855542/it/foto/bacchetta-con-pezzo-di-sushi-nigiri.jpg?s=612x612&w=0&k=20&c=Cm4kNnp4MjNCqkW9yNtInrkYYqp_zf8cm2gfuxMa-ME=',
                'price' => 4,
                'ingredients' => 'Pesce crudo, riso, alghe nori',
                'visibility' => true,
                'description' => 'Il sushi è un piatto giapponese che consiste in riso condito con aceto di riso e accompagnato da una varietà di ingredienti, tra cui pesce crudo o cotto, frutti di mare, verdure e alghe',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Tempura',
                'img_url' => 'https://media.istockphoto.com/id/1308870971/it/foto/lay-piatto-di-ricetta-di-tempura-vegetale-giapponese-con-salsa-ponzu-allo-zenzero-sfondo-nero.jpg?s=612x612&w=0&k=20&c=Z_rPpeYUTV3newqmnB_E5vV-bdPcj5v5re8xLVncICI=',
                'price' => 5.50,
                'ingredients' => 'Frutti di mare o verdure, pastella leggera',
                'visibility' => true,
                'description' => 'La tempura è un piatto giapponese di frutti di mare o verdure fritte in una pastella leggera. Viene spesso servita come antipasto o contorno.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Ramen',
                'img_url' => 'https://media.istockphoto.com/id/1135293039/it/foto/ramen-noodle-asiatico-in-brodo-con-carne-di-lingua-di-manzo-funghi-e-uovo-sottaceto-ajitama-in.jpg?s=612x612&w=0&k=20&c=3Lc3hIX3rRgyQvR88jTHhTlgMs4Zy8HYWHF60zUSFr8=',
                'price' => 9.99,
                'ingredients' => 'Noodles, brodo, carne o verdure',
                'visibility' => true,
                'description' => 'Il ramen è una zuppa giapponese a base di noodles in un brodo ricco, spesso arricchita con carne (come maiale o pollo), uova, verdure e condimenti vari.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Okonomiyaki',
                'img_url' => 'https://media.istockphoto.com/id/481546525/it/foto/osaka-okonomiyaki.jpg?s=612x612&w=0&k=20&c=D35n1vNLjqAnKEP6S_Iw3BStydLHBTdBDdJG1uU5Q-c=',
                'price' => 7.25,
                'ingredients' => 'Cavolo, pancetta, pasta per okonomiyaki, salse e condimenti vari',
                'visibility' => true,
                'description' => 'L\'okonomiyaki è una sorta di pancake giapponese che contiene una varietà di ingredienti come cavolo, pancetta e altri a scelta.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Gyoza',
                'img_url' => 'https://media.istockphoto.com/id/1286079738/it/foto/gnocchi-fritti-gyoza-con-salsa-di-soia-e-bacchette-vista-dallalto.jpg?s=612x612&w=0&k=20&c=inBs86CX9IPJRkLnQSdqPEG3DjZwCq1kT9zYx91Olq0=',
                'price' => 6.75,
                'ingredients' => 'Carne tritata, verdure, pasta per gyoza',
                'visibility' => true,
                'description' => 'I gyoza sono dumpling giapponesi ripieni di carne tritata e verdure, avvolti in una sottile sfoglia di pasta e poi cotti fino a doratura. Sono spesso serviti come antipasto o accompagnamento.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Unagi Don',
                'img_url' => 'https://media.istockphoto.com/id/1474047810/it/foto/riso-giapponese-condito-con-anguilla-grigliata-unagi-don.jpg?s=612x612&w=0&k=20&c=fssVef1kY4pvSGmPcsAb3m_qfM09lvXw6I7LAtxVqkg=',
                'price' => 12.99,
                'ingredients' => 'Anguilla grigliata, riso, salsa teriyaki e salsa di soia',
                'visibility' => true,
                'description' => 'L\'unagi don è un piatto giapponese classico composto da anguilla grigliata servita su un letto di riso bianco, condita con una salsa teriyaki. L\'anguilla viene marinata e grigliata, mentre la salsa teriyaki si fonde con il sapore dell\'anguilla e del riso.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Takoyaki',
                'img_url' => 'https://media.istockphoto.com/id/622004828/it/foto/takoyaki.jpg?s=612x612&w=0&k=20&c=1V5QiJBE4Ct0H1_uumUGEeK9Tai7WC6xnYBGt56tiTA=',
                'price' => 8.25,
                'ingredients' => 'Polpo, farina, dashi, cipolla verde, zenzero marinato, salsa takoyaki',
                'visibility' => true,
                'description' => 'I takoyaki sono delle palle di polpo giapponesi preparate con una pastella a base di farina e dashi, con pezzi di polpo al loro interno. Vengono cotti in uno stampo speciale e serviti caldi, solitamente conditi con salsa takoyaki, maionese giapponese, alghe aonori e scaglie di bonito.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Chirashi',
                'img_url' => 'https://media.istockphoto.com/id/1124699542/it/foto/ciotola-verde-fatta-a-mano-con-chirashi-su-tavolo-in-legno-testurato.jpg?s=612x612&w=0&k=20&c=eN1nqqR39_uLewgajo-U7TAzBrhTzlaBOuKHqrTwf50=',
                'price' => 10.50,
                'ingredients' => 'Riso, pesce crudo o cotto, verdure, uova di pesce, alghe nori',
                'visibility' => true,
                'description' => 'Il chirashi è un piatto giapponese composto da riso coperto con una varietà di pesce crudo o cotto, verdure, uova di pesce e altri condimenti, disposti artisticamente sulla parte superiore del riso. È una versione più semplice di sushi, ma altrettanto gustosa.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Yakitori',
                'img_url' => 'https://media.istockphoto.com/id/1171255420/it/foto/cibo-giapponese.jpg?s=612x612&w=0&k=20&c=e0Dn9ZySgO2aQFwTU7vswtrjtJP40LcbLopHcNd75VI=',
                'price' => 6.50,
                'ingredients' => 'Pollo (pollo, cosce o fegato), salsa tare',
                'visibility' => true,
                'description' => 'Lo yakitori è una specialità giapponese di spiedini di pollo cotti alla griglia. Viene preparato utilizzando pezzi di pollo, come petto, cosce o fegato, infilzati su spiedini di bambù e cotti sulla griglia. Lo yakitori è un piatto popolare da strada in Giappone, spesso servito come spuntino o antipasto in ristoranti specializzati.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Karaage',
                'img_url' => 'https://media.istockphoto.com/id/1038060160/it/foto/porzione-di-karaage-di-pollo-fritto-con-limone-e-cipolla-da-vicino-su-un-piatto-orizzontale.jpg?s=612x612&w=0&k=20&c=ggdd5b-nKAbjLGDjmgw7Xxu5-3NoXEvrkGyLj5g6_ZY=',
                'price' => 10.50,
                'ingredients' => 'Pollo, salsa di soia, zenzero, aglio, amido di mais, olio vegetale',
                'visibility' => true,
                'description' => 'Il karaage è una specialità giapponese di pollo fritto, caratterizzata dalla sua croccantezza esterna e dal suo interno succoso. Il pollo viene marinato in una miscela di salsa di soia, zenzero e aglio per aggiungere sapore, quindi ricoperto di amido di mais prima della frittura.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Soba',
                'img_url' => 'https://media.istockphoto.com/id/626852996/it/foto/soba-noodles-cibo-giapponese.jpg?s=612x612&w=0&k=20&c=-9qqVnGqSynnSez1GBAJr8BOamQ90dCxr9mUubgQ1_A=',
                'price' => 8.99,
                'ingredients' => 'Noodles di grano saraceno, brodo dashi, cipolla verde, wasabi',
                'visibility' => true,
                'description' => 'Gli soba sono noodles giapponesi fatti con farina di grano saraceno o una combinazione di grano saraceno e farina di frumento. Sono spesso serviti freddi con un brodo dashi leggero per tuffarli e accompagnati da condimenti come cipolla verde tritata e wasabi.',
                'restaurant_id' => 1,
            ],




            [
                'name' => 'Ramen',
                'img_url' => 'https://media.istockphoto.com/id/1135293039/it/foto/ramen-noodle-asiatico-in-brodo-con-carne-di-lingua-di-manzo-funghi-e-uovo-sottaceto-ajitama-in.jpg?s=612x612&w=0&k=20&c=3Lc3hIX3rRgyQvR88jTHhTlgMs4Zy8HYWHF60zUSFr8=',
                'price' => 6,
                'ingredients' => 'Noodle, brodo, carne (opzionale), uovo, cipollotti',
                'description' => 'Il ramen è un piatto giapponese estremamente popolare e amato in tutto il mondo. È composto principalmente da una base di brodo, noodles, e una varietà di ingredienti che possono includere carne, verdure, uova e condimenti.',
                'visibility' => true,
                'restaurant_id' => 2,
            ],

            [
                'name' => 'Tempura',
                'img_url' => 'https://media.istockphoto.com/id/629614394/it/foto/deliziosi-gamberi-in-tempura-con-salsa-agrodolce.jpg?s=612x612&w=0&k=20&c=-rLaV2hx95xpK5ScXbzQBASvdwcXsz9EOQsj-vqCqxY=',
                'price' => 2,
                'ingredients' => 'Verdure (come zucchine, carote), gamberi, pesce, pastella',
                'visibility' => true,
                'description' => 'La tempura è un piatto giapponese costituito da cibo fritto immerso in una pastella leggera e croccante',
                'restaurant_id' => 3,
            ],
            [
                'name' => 'Patatas Bravas con salsa piccante',
                'img_url' => 'https://media.istockphoto.com/id/1130702198/it/foto/un-piatto-di-papas-bravas-fatto-con-patate-peperoni-e-aglio-pasto-tipico-da-tarifa-andalusia.jpg?s=612x612&w=0&k=20&c=c5AfUxcMTlU32rwyQlIy5qAry4hNEVJKAiq3ZCvwYFU=',
                'price' => 8.50,
                'ingredients' => 'Patate, Salsa di pomodoro, Maionese, Pepe di Cayenna, Aglio, Olio d\'oliva, Sale e pepe',
                'visibility' => true,
                'description' => 'Le patatas bravas sono un piatto spagnolo tradizionale, popolare in tutto il Paese e amato per il loro sapore ricco e la loro consistenza croccante. ',
                'restaurant_id' => 4,

            ],
            [
                'name' => 'Gazpacho Andaluz con crostini',
                'img_url' => 'https://blog.giallozafferano.it/simona68/wp-content/uploads/2021/08/gazpacho-andaluso-vert-def-720x1080.jpg',
                'price' => 7.50,
                'ingredients' => 'Peperoni Piquillo, Frutti di mare, Cipolla, Aglio, Pomodori, Prezzemolo fresco, Vino bianco, Pane grattugiato, Uova, Sale e pepe, Olio EVO',
                'visibility' => true,
                'description' => 'Il Gazpacho Andaluz è una zuppa fredda tradizionale della cucina spagnola, originaria della regione dell\'Andalusia.',
                'restaurant_id' => 4,
            ],
            [
                'name' => 'Piquillos Rellenos di Frutti di Mare',
                'img_url' => 'https://media.istockphoto.com/id/1476140802/it/foto/peperoni-rossi-ripieni-di-nasello-peperoni-piquillo.jpg?s=612x612&w=0&k=20&c=aHlH21WYV3ecR_qYqzSrnM9cQ8b1Z63Qu4zD0vQKOdA=',
                'price' => 7.50,
                'ingredients' => 'Pomodori maturi, Pepe Verde, Cetriolo, Cipolla rossa, Aglio, Pepe Rosso, Pane Raffermo, Aceto di vino rosso, Olio EVO, Sale, Pepe nero, Acqua',
                'visibility' => true,
                'description' => 'I Piquillos Rellenos di Frutti di Mare sono un piatto spagnolo che combina i peperoni Piquillo con un ripieno di frutti di mare.',
                'restaurant_id' => 5,
            ],
            [
                'name' => 'Paella Mixta',
                'img_url' => 'https://media.istockphoto.com/id/510244381/it/foto/paella-di-pesce-tipica-spagnola.jpg?s=612x612&w=0&k=20&c=4ZAfts29r9ROUeHjV2vDiJKDtUlkGn3x6gkrnP1Gh60=',
                'price' => 3.50,
                'ingredients' => 'Pomodori maturi, Pepe Verde, Cetriolo, Cipolla rossa, Aglio, Pepe Rosso, Pane Raffermo, Aceto di vino rosso, Olio EVO, Sale, Pepe nero, Acqua',
                'visibility' => true,
                'description' => 'La Paella Mixta è un piatto tradizionale della cucina spagnola originaria della regione di Valencia, ed è ampiamente apprezzato in tutta la Spagna e oltre.',
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Pimientos de Padrón con sale grosso',
                'img_url' => 'https://media.istockphoto.com/id/1407053430/it/foto/primo-piano-peperoni-padron-blisterati.jpg?s=612x612&w=0&k=20&c=rGZ7DsJQZqrG5Cxo85vklaRCpFFF2-fJnDS9JRYAQn0=',
                'price' => 4.50,
                'ingredients' => 'Peperoni Padrón, Sale Grosso',
                'visibility' => true,
                'description' => 'I Pimientos de Padrón sono un antipasto tradizionale spagnolo composto da peperoni Padrón, una varietà di peperoncini verdi piccoli, dolci e teneri, fritti e serviti con sale grosso.',
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Patbingsu',
                'img_url' => 'https://media.istockphoto.com/id/918728292/it/foto/kakigori-starberry-o-starberry-korean-shave-ice-patbingsu-o-bingsu-dessert-congelato-su-tavolo.jpg?s=612x612&w=0&k=20&c=Kkj_nFW4dXFi2CSydtT_HmMwLsB_fC9L-e9iypt6DlU=',
                'price' => 3.50,
                'ingredients' => 'Ghiaccio tritato, Latte condensato, Fagioli rossi zuccherati, Frutta fresca, Farina di Fagioli Rossi',
                'visibility' => true,
                'description' => 'Il Patbingsu è un dessert tradizionale coreano che si distingue per la sua freschezza e la sua presentazione colorata e invitante.',
                'restaurant_id' => 7,
            ],
            [
                'name' => 'Hotteok',
                'img_url' => 'https://media.istockphoto.com/id/1369736332/it/foto/hotteok-frittelle-sudcoreane-o-pasta-fritta-con-noci-e-ripieno-di-zucchero.jpg?s=612x612&w=0&k=20&c=4X73ewr2B8HgEfSqY8WuO4BRHg-U6vmF3h7iV1u3P24=',
                'price' => 5.00,
                'ingredients' => 'Farina di grano, Cipolla verde, Noci, Zucchero di canna, Cannella',
                'visibility' => true,
                'description' => 'Hotteok è un dolce coreano tradizionale amato per il suo ripieno dolce e la sua crosta esterna croccante',
                'restaurant_id' => 8,
            ],
            [
                'name' => 'Bungeoppang',
                'img_url' => 'https://media.istockphoto.com/id/1217080398/it/foto/taiyaki-coreano.jpg?s=612x612&w=0&k=20&c=kLqPPs2UUqaFp8vPrYBsM77--WKvSvyjUaMd5n7myX0=',
                'price' => 5.00,
                'ingredients' => 'Farina, Lievito, Zucchero, Gelato alla Vaniglia',
                'visibility' => true,
                'description' => 'Bungeoppang è un dolce coreano a forma di pesce che si distingue per la sua forma unica e il suo ripieno dolce.',
                'restaurant_id' => 9,
            ],
            [
                'name' => 'Bokbunja-ju',
                'img_url' => 'https://media.istockphoto.com/id/1474357256/it/foto/latte-con-gelatina-di-erba.jpg?s=612x612&w=0&k=20&c=BGkWc3EAUaqtoHhiO3qC39rGeoc5bpkXRBokpoYMdA0=',
                'price' => 3.00,
                'ingredients' => 'Vino di more nere, acqua, zucchero',
                'visibility' => true,
                'description' => 'Il Bokbunja-ju è una bevanda alcolica tradizionale coreana fatta con i frutti di bosso. ',
                'restaurant_id' => 9,
            ],
            [
                'name' => 'Sikhye',
                'img_url' => 'https://media.istockphoto.com/id/1364595239/it/foto/coreano-cinnamon-punch-sujeonggwa.jpg?s=612x612&w=0&k=20&c=fbai5uhCq0FatdY0tepT9agGoHYzG0PcSb-Nj7yAf-Y=',
                'price' => 3.50,
                'ingredients' => 'Riso maltato, acqua, zucchero, uvetta',
                'visibility' => true,
                'description' => 'Il Sikhye è una bevanda dolce e rinfrescante tradizionale coreana, ampiamente apprezzata per il suo sapore unico e la sua consistenza leggermente viscosa.',
                'restaurant_id' => 7,
            ],
            [
                'name' => 'Involtini Primavera ai Gamberi',
                'img_url' => 'https://media.istockphoto.com/id/1175470424/it/foto/involtini-primavera-asiatici-crudi-di-carta-di-riso-con-gamberi-spaghetti-di-riso-lattuga-e.jpg?s=612x612&w=0&k=20&c=o2XjhIdNvun8WAWlH3lVi8jZ6Jcl9fGIVZyqGIF8KJA=',
                'price' => 6.50,
                'ingredients' => 'Verza, gamberetti, uova, funghi cinesi, salsa di soia, olio di semi',
                'visibility' => true,
                'description' => 'Involtini Primavera ai Gamberi: un\'esplosione di sapori orientali con fresche verdure, gamberi saporiti e carta di riso, da gustare fritti o al vapore con salsa di soia, agrodolce o cocktail.',
                'restaurant_id' => 10,
            ],

            [
                'name' => 'Ravioli di Gamberi al vapore',
                'img_url' => 'https://media.istockphoto.com/id/1282749403/it/foto/gnocchi-pieni-di-cavolo-pierogi-varenyky-vareniki-pirohy-gnocchi-con-ripieno.jpg?s=612x612&w=0&k=20&c=1z7apP5_DpPlrf5SGrtldaqF3aCT2L0WIJswsotZ-OA=',
                'price' => 6.00,
                'ingredients' => 'Pasta per ravioli, gamberetti, zenzero, cipollotto, olio di sesamo',
                'visibility' => true,
                'description' => 'Ravioli di Gamberi al vapore: morbida pasta racchiude un cuore di gamberi saporiti, per un\'esperienza di gusto delicata e raffinata.',
                'restaurant_id' => 10,
            ],

            [
                'name' => 'Zuppa di Granchio e Asparagi',
                'img_url' => 'https://media.istockphoto.com/id/1022408050/it/foto/zuppa-di-panna-di-granchio.jpg?s=612x612&w=0&k=20&c=kV6FKod3ptywMwJ3yHejJDByrrersw_MD8U4zDFVjf4=',
                'price' => 9.00,
                'ingredients' => 'Carne di granchio, asparagi, brodo di pollo, zenzero, cipollotto',
                'visibility' => true,
                'description' => 'Zuppa di Granchio e Asparagi: un connubio cremoso e avvolgente tra il sapore dolce del granchio e il gusto fresco degli asparagi, per un primo piatto elegante e raffinato.',
                'restaurant_id' => 11,
            ],

            [
                'name' => 'Ravioli di Verdure al Vapore',
                'img_url' => 'https://media.istockphoto.com/id/1413654815/it/foto/vareniky-ripieni-di-funghi-di-patate-pierogi-o-gnocchi.jpg?s=612x612&w=0&k=20&c=ewUaO343C70DwvKWNe8M_vsLdTsl1TvYBhR6bzAdmAQ=',
                'price' => 6.00,
                'ingredients' => 'Pasta per ravioli, verdure miste (carote, fagiolini, funghi), salsa di soia',
                'visibility' => true,
                'description' => 'Ravioli di Verdure al Vapore: un\'esplosione di colori e sapori vegetali racchiusi in un morbido involucro di pasta, per un piatto sano e leggero perfetto per ogni palato.',
                'restaurant_id' => 11,
            ],

            [
                'name' => 'Tofu Saltato con Verdure',
                'img_url' => 'https://media.istockphoto.com/id/1181820712/it/foto/mescolare-tofu-fritto-e-verdure-con-salsa-di-arachidi.jpg?s=612x612&w=0&k=20&c=tL7RYGBW9v0G8gKyhQ-xEp4CMPwZ1Cqp2Q8uBEa5_Ro=',
                'price' => 7.50,
                'ingredients' => 'Tofu, verdure miste (peperoni, cipolle, broccoli), salsa di soia, olio di semi',
                'visibility' => true,
                'description' => 'Tofu Saltato con Verdure: un piatto vegano ricco di proteine e vitamine, dove il tofu morbido si sposa con il gusto croccante delle verdure saltate in padella, per un\'esperienza culinaria sana e saporita.',
                'restaurant_id' => 12,
            ],
            [
                'name' => 'Costine St. Louis Fumanti',
                'img_url' => 'https://media.istockphoto.com/id/823615974/it/foto/costolette-di-maiale-affumicate-fatte-in-casa-in-stile-st-louis.jpg?s=612x612&w=0&k=20&c=qwjZazxbmRKiSWtGd6oxp_OpUf2XDwuha4whb8zh-6U=',
                'price' => 18.99,
                'ingredients' => 'frizione a secco, salsa barbecue segreta di Big Al',
                'description' => 'Costine di maiale in stile St. Louis',
                'visibility' => true,
                'restaurant_id' => 13,
            ],


            [
                'name' => 'Pollo Fritto alla Southern con Waffle',
                'img_url' => 'https://media.istockphoto.com/id/1325150602/it/foto/cialde-con-pollo-fritto.jpg?s=1024x1024&w=is&k=20&c=ujZ_y2YbnHcXZ7cENgRuhPsPoJOyh_H6rkYPdotxaSM=',
                'price' => 15.99,
                'ingredients' => 'Pollo fritto al latticello, waffle belga, sciroppo d\'acero',
                'visibility' => true,
                'description' => 'Il Pollo Fritto alla Southern con Waffle è un\'abbinata iconica della cucina americana meridionale. Il pollo viene marinato in una miscela di spezie ed erbe aromatiche.',
                'restaurant_id' => 14,
            ],

            [
                'name' => 'Costine St. Louis Fumanti',
                'img_url' => 'https://media.istockphoto.com/id/1221822964/it/foto/lento-arrostito-st-louis-stile-bambino-indietro-costole-di-maiale.jpg?s=1024x1024&w=is&k=20&c=r9q3j4rOk6oxTLmYTLwFxvSv7Egb3ivESr16ynwhADA=',
                'price' => 18.99,
                'ingredients' => 'frizione a secco, salsa barbecue segreta di Big Al',
                'description' => 'Costine di maiale in stile St. Louis',
                'visibility' => true,
                'restaurant_id' => 13,
            ],


            [
                'name' => 'Pollo Fritto alla Southern con Waffle',
                'img_url' => 'https://media.istockphoto.com/id/844129660/it/foto/pollo-fritto-croccante-degli-stati-uniti-meridionali.jpg?s=612x612&w=0&k=20&c=zJym5lmhl8llWVGgHWddEkPu4tyKktjopAzap7gTeqA=',
                'price' => 15.99,
                'ingredients' => 'Pollo fritto al latticello, waffle belga, sciroppo d\'acero',
                'visibility' => true,
                'description' => 'Il Pollo Fritto alla Southern con Waffle è un\'abbinata iconica della cucina americana meridionale. Il pollo viene marinato in una miscela di spezie ed erbe aromatiche.',
                'restaurant_id' => 14,
            ],

            [

                'name' => 'La Torta del Peccatore',
                'img_url' => 'https://media.istockphoto.com/id/971514208/it/foto/deliziosa-pasticceria-con-marmellata-di-prugne-da-vicino-vista-superiore-verticale.jpg?s=612x612&w=0&k=20&c=JAbfkW22UJLShffBn0JOiat1rq97C_RNjvvU05uiII8=',
                'price' => 8.99,
                'ingredients' => 'Pan di Spagna al cacao,Mousse al cioccolato fondente,Ganache al caramello salato,Noci pecan pralinate',
                'visibility' => true,
                'description' => 'La torta del peccatore è un dolce paradisiaco che fa sognare al solo guardarlo.',
                'restaurant_id' => 15,

            ],
            [
                'name' => 'Burrito con Pollo e Riso',
                'img_url' => 'https://media.istockphoto.com/id/1317280854/it/foto/burrito-di-riso-e-pollo-messicano.jpg?s=612x612&w=0&k=20&c=PDrwlx82t8TolH8J_ue9591Owhyib3vxZZSS1IqS-dY=',
                'price' => 10.00,
                'ingredients' => 'Tortilla di farina, pollo, riso bianco, fagioli neri, pomodori, lattuga, formaggio cheddar, panna acida, salsa guacamole, salsa pico de gallo',
                'visibility' => true,
                'description' => 'Il Burrito con Pollo e Riso è un\'esplosione di sapori e consistenze che ti catapulterà direttamente in Messico.',
                'restaurant_id' => 17,
            ],

            [
                'name' => 'Fajitas di Manzo con Verdure',
                'img_url' => 'https://media.istockphoto.com/id/1001472234/it/foto/gustosi-tacos-messicani-con-ripieno-di-fajita-di-manzo-servito-con-salsa.jpg?s=612x612&w=0&k=20&c=NnqhG9r0lHqeZdQ-yfSmaKtRZF_gAoMivXme0SJVe6I=',
                'price' => 12.00,
                'ingredients' => 'Manzo, peperoni, cipolle, peperoncino jalapeno, tortillas di mais, spezie per fajitas, olio d\'oliva, sale e pepe',
                'visibility' => true,
                'description' => 'Le Fajitas di Manzo con Verdure sono un tripudio di colori e sapori che ti trasportano in un viaggio culinario nel cuore del Texas.',
                'restaurant_id' => 18,
            ],

            [
                'name' => 'Guacamole con Nachos',
                'img_url' => 'https://media.istockphoto.com/id/618556928/it/foto/ciotola-di-guacamole-con-patatine-tortilla.jpg?s=612x612&w=0&k=20&c=IZ8YkX2zzNNw7-ffWpPTrtszUsP7DFMLk-olxN3ubD4=',
                'price' => 7.00,
                'ingredients' => 'Avocado, pomodori, cipolla, peperoncino jalapeno, coriandolo, lime, olio d\'oliva, sale e pepe, tortilla chips',
                'visibility' => true,
                'description' => 'Il Guacamole con Nachos è un connubio perfetto tra sapori e consistenze che conquista al primo morso.',
                'restaurant_id' => 16,
            ],

            // piatti dei ristoranti aggiunti da berna 
            [
                "name" => "Pollo Tikka Masala",
                "img_url" => "https://media.istockphoto.com/id/1227594550/it/foto/pollo-al-curry-burro-di-pollo-cremoso.jpg?s=612x612&w=0&k=20&c=qMtjij8CaMR3U2-Y2kBqMi6-MdsbrtQ9rDwth-MdJTo=",
                "price" => 12.50,
                "ingredients" => "Pollo, pomodoro, panna, spezie tikka masala",
                "visibility" => true,
                "description" => "Un piatto classico dell'India settentrionale, il Pollo Tikka Masala è una deliziosa combinazione di pezzi di pollo tenero marinato in una salsa cremosa e speziata a base di pomodoro e panna. Perfetto da accompagnare con del riso basmati caldo.",
                "restaurant_id" => 21
            ],
            [
                "name" => "Paneer Tikka",
                "img_url" => "https://media.istockphoto.com/id/693946394/it/foto/paneer-tikka-kabab-spiedini-di-formaggio-indiano-tandoori-o-paneer-barbecue-messa-a-fuoco.jpg?s=612x612&w=0&k=20&c=YYCwhtBa9Rnos11y8ajMugWRxn1eIOSdD9EaKZq-MYM=",
                "price" => 10.99,
                "ingredients" => "Paneer, yogurt, spezie tikka, peperoni",
                "visibility" => true,
                "description" => "Il Paneer Tikka è un piatto vegetariano popolare, composto da cubetti di paneer (formaggio indiano) marinati in una miscela di yogurt e spezie aromatiche, quindi grigliati fino a ottenere una consistenza croccante e un sapore irresistibile. Un'ottima scelta per gli amanti del formaggio e dei sapori speziati.",
                "restaurant_id" => 22
            ],
            [
                "name" => "Biryani di Agnello",
                "img_url" => "https://media.istockphoto.com/id/1407172002/it/foto/biryani-di-montone-piccante-indiano-con-raita-e-gulab-jamun-servito-in-un-piatto-vista.jpg?s=612x612&w=0&k=20&c=QXaFI2SzUqtHX2yi_k_iaHKB33xSC4ptR9A1tnQWCk4=",
                "price" => 14.75,
                "ingredients" => "Agnello, riso basmati, spezie biryani, cipolla fritta",
                "visibility" => true,
                "description" => "Il Biryani di Agnello è un piatto ricco e aromatico, composto da agnello tenero marinato in una miscela di spezie fragranti e cotto lentamente con riso basmati profumato. Un vero e proprio festival di sapori dell'India.",
                "restaurant_id" => 22
            ],
            [
                "name" => "Samosa",
                "img_url" => "https://media.istockphoto.com/id/980106992/it/foto/spuntino-samosa-servito-con-ketchup-di-pomodoro-e-chutney-alla-menta.jpg?s=612x612&w=0&k=20&c=A7JIpt9M52pLG4Tq3fV1Xyy0h1tyV3RCFBIDcxApUfI=",
                "price" => 7.25,
                "ingredients" => "Patate, piselli, pasta di farina, spezie garam masala",
                "visibility" => true,
                "description" => "Le Samosa sono delle deliziose frittelle ripiene di una miscela speziata di patate, piselli e altre verdure. Croccanti all'esterno e morbide all'interno, sono un piatto iconico della cucina indiana da gustare come antipasto o spuntino.",
                "restaurant_id" => 23
            ],
            [
                "name" => "Palak Paneer",
                "img_url" => "https://media.istockphoto.com/id/851889508/it/foto/palak-paneer.jpg?s=612x612&w=0&k=20&c=v8kedHbLZt-NAX_RePd5tNWdbCsQys6FouzNKyJcuMs=",
                "price" => 11.50,
                "ingredients" => "Paneer, spinaci, pomodoro, spezie indiane",
                "visibility" => true,
                "description" => "Il Palak Paneer è un piatto vegetariano cremoso e saporito, composto da pezzi di paneer (formaggio indiano) in una salsa di spinaci aromatica. Ricco di ferro e proteine, è una scelta nutriente e deliziosa per tutti.",
                "restaurant_id" => 23
            ],
            [
                "name" => "Chicken Korma",
                "img_url" => "https://media.istockphoto.com/id/486741528/it/foto/pollo-korma.jpg?s=612x612&w=0&k=20&c=OviCFVheSUXsjIC4NFgiKur-bAtFxo6lDyjcY06iJZU=",
                "price" => 13.99,
                "ingredients" => "Pollo, mandorle, panna, spezie korma",
                "visibility" => true,
                "description" => "Il Chicken Korma è un piatto di pollo ricco e cremoso, preparato con una salsa a base di mandorle, panna e una miscela di spezie aromatiche. Un'esplosione di sapori che delizierà il palato di chiunque.",
                "restaurant_id" => 19
            ],
            [
                "name" => "Dal Tadka",
                "img_url" => "https://media.istockphoto.com/id/541305426/it/foto/zuppa-di-zucca-con-panna-e-carota-e-prezzemolo.jpg?s=612x612&w=0&k=20&c=q_3Z9sjuvbDQyQedXaN11Z59aJ6XJl2pGL51oAb4VjI=",
                "price" => 9.75,
                "ingredients" => "Lenticchie gialle, pomodoro, spezie tadka, burro chiarificato",
                "visibility" => true,
                "description" => "Il Dal Tadka è un piatto di lenticchie gialle cotte lentamente e condite con una generosa dose di tadka, una miscela di spezie fritte in burro chiarificato. Semplice ma pieno di sapore, è un accompagnamento perfetto per riso o pane.",
                "restaurant_id" => 24
            ],
            [
                "name" => "Butter Chicken",
                "img_url" => "https://media.istockphoto.com/id/1472620857/it/foto/gustoso-piatto-di-pollo-al-curry-al-burro-della-cucina-indiana.jpg?s=612x612&w=0&k=20&c=M8WeotRoFAA3X5j0HhGyl0EbyTVXI3jgjyYPULZ73fw=",
                "price" => 15.25,
                "ingredients" => "Pollo, pomodoro, panna, burro, spezie masala",
                "visibility" => true,
                "description" => "Il Butter Chicken è un piatto di pollo succoso e tenero, immerso in una salsa cremosa e burrosa aromatizzata con spezie masala. Con il suo sapore ricco e avvolgente, è un piatto che conquisterà il cuore di chiunque.",
                "restaurant_id" => 20
            ],
            [
                "name" => "Naan",
                "img_url" => "https://media.istockphoto.com/id/1298748782/it/foto/focaccia-tradizionale-indiana-naan.jpg?s=612x612&w=0&k=20&c=f9yGGbQkPt2X4c_nb5yXbNk8La_09ygLfwviY6hJbro=",
                "price" => 5.99,
                "ingredients" => "Farina, lievito, yogurt, burro chiarificato",
                "visibility" => true,
                "description" => "Il Naan è un pane soffice e leggermente cotto al forno tandoor, spesso servito caldo e spalmato di burro chiarificato. Con la sua consistenza morbida e il sapore delicato, è un accompagnamento perfetto per qualsiasi pasto indiano.",
                "restaurant_id" => 24
            ],
            [
                "name" => "Mango Lassi",
                "img_url" => "https://media.istockphoto.com/id/1365859011/it/foto/bevi-lassi-di-mango-in-due-bicchieri-su-un-tavolo-rustico-in-cemento-con-manfo-fresco-tagliato.jpg?s=612x612&w=0&k=20&c=URC9id_bLdHIrEypt2Cr3q5S9aD0kO6nTgwm3GJQ45E=",
                "price" => 6.50,
                "ingredients" => "Mango, yogurt, zucchero, cardamomo",
                "visibility" => true,
                "description" => "Il Mango Lassi è una bevanda rinfrescante e deliziosa, preparata con mango dolce, yogurt cremoso e una spruzzata di cardamomo aromatico. Perfetto per spegnere la sete e rinfrescare il palato dopo un pasto speziato.",
                "restaurant_id" => 25
            ],
            [
                "name" => "Chana Masala",
                "img_url" => "https://media.istockphoto.com/id/1295943731/it/foto/chana-masala-o-chole-in-ciotola-nera-sul-piano-del-tavolo-in-ardesia-scura-cucina-indiana-veg.jpg?s=612x612&w=0&k=20&c=K1JprLYA-9wwQb11MvQmbLSaBCOnZnOLLxDiPo5D8KI=",
                "price" => 10.50,
                "ingredients" => "Ceci, pomodoro, cipolla, spezie masala",
                "visibility" => true,
                "description" => "Il Chana Masala è un piatto vegetariano dal sapore robusto, preparato con ceci cotti lentamente in una salsa speziata a base di pomodoro e cipolla. Ricco di proteine e fibre, è una scelta salutare e gustosa.",
                "restaurant_id" => 25
            ],
            [
                "name" => "Tandoori Chicken",
                "img_url" => "https://media.istockphoto.com/id/1227594550/it/foto/pollo-al-curry-burro-di-pollo-cremoso.jpg?s=612x612&w=0&k=20&c=qMtjij8CaMR3U2-Y2kBqMi6-MdsbrtQ9rDwth-MdJTo=",
                "price" => 14.25,
                "ingredients" => "Pollo, yogurt, spezie tandoori, succo di limone",
                "visibility" => true,
                "description" => "Il Tandoori Chicken è un classico piatto indiano, composto da pezzi di pollo marinati in una miscela di yogurt e spezie tandoori, quindi cotti in un forno tandoor ardente. Con il suo sapore affumicato e speziato, è un vero piacere per il palato.",
                "restaurant_id" => 25
            ],
            [
                "name" => "Raita",
                "img_url" => "https://media.istockphoto.com/id/1056787708/it/foto/salsa-di-yogurt-con-erbe-aromatiche-spezie-e-cetriolo-primo-up-sul-tavolo-raita-vista.jpg?s=612x612&w=0&k=20&c=Jhqq8h6uyVnpMRpUey1aw9E-6uQR9rsbrRqtMdEbFFk=",
                "price" => 5.75,
                "ingredients" => "Yogurt, cetriolo, pomodoro, spezie",
                "visibility" => true,
                "description" => "Il Raita è una salsa rinfrescante a base di yogurt, arricchita con pezzi di cetriolo fresco e pomodoro, e aromatizzata con una miscela di spezie. Ottimo da gustare come accompagnamento per piatti speziati o come salsa per immergere il pane.",
                "restaurant_id" => 26
            ],
            [
                "name" => "Pakora",
                "img_url" => "https://media.istockphoto.com/id/1334330780/it/foto/piatto-pakora-di-pollo-con-salsa-di-peperoncino-dolce-su-tavola-di-legno-bianco.jpg?s=612x612&w=0&k=20&c=Ys4jAvo2TxnYWm9OWojZnmGBqD23EUeSVRv7Y3ydyVo=",
                "price" => 8.99,
                "ingredients" => "Verdure miste, farina di ceci, spezie, olio per friggere",
                "visibility" => true,
                "description" => "Le Pakora sono delle frittelle indiane croccanti e deliziose, preparate con una miscela di verdure miste, immerse in una pastella a base di farina di ceci e spezie, quindi fritte fino a ottenere una doratura perfetta. Perfette da gustare come antipasto o spuntino.",
                "restaurant_id" => 26
            ],
            [
                "name" => "Murg Makhani (Burro Chicken)",
                "img_url" => "https://media.istockphoto.com/id/1295019814/it/foto/murgh-makhani-o-pollo-al-burro-in-ciotola-nera-sul-piano-scuro-del-tavolo-in-ardesia-piatto-di.jpg?s=612x612&w=0&k=20&c=wcCXOFC9p5QoGBp2IbY3_cBsFBH75y1RhS17CapsxW0=",
                "price" => 16.50,
                "ingredients" => "Pollo, pomodoro, panna, burro, spezie masala",
                "visibility" => true,
                "description" => "Il Murg Makhani, comunemente noto come Burro Chicken, è un piatto ricco e indulgente, composto da pezzi di pollo tenero in una salsa cremosa a base di pomodoro, panna e burro. Con il suo sapore ricco e avvolgente, è una vera delizia.",
                "restaurant_id" => 27
            ],

            // piatti indiani 

            [
                'name' => 'Pad Thai',
                'img_url' => 'https://media.istockphoto.com/id/510163478/it/foto/pad-thai.jpg?s=612x612&w=0&k=20&c=sQP_r5Z8-vnXgGJWiC3aEw7pLwZdYSFhHxyIFqUVt5M=',
                'price' => 10.99,
                'ingredients' => 'Spaghetti di riso, gamberetti, tofu, uova, arachidi, germogli di soia',

                'visibility' => true,
                'description' => 'Il Pad Thai è uno dei piatti più iconici della cucina thailandese. È composto da spaghetti di riso saltati in padella con una miscela di ingredienti come gamberetti, tofu, uova, arachidi e germogli di soia, il tutto condito con una salsa a base di tamarindo e spezie.',
                'restaurant_id' => 34,
            ],
            [
                'name' => 'Tom Yum Goong',
                'img_url' => 'https://media.istockphoto.com/id/995757154/it/foto/zuppa-calda-e-acida-il-cibo-tradizionale-in-thailandia-contiene-galangal-allo-zenzero-al.jpg?s=612x612&w=0&k=20&c=_W50hXhRB9WThVab9grQBBJttpn4j0B_bPKAPLtncbw=',
                'price' => 12.50,
                'ingredients' => 'Gamberi, funghi, erba cipollina, peperoncino, lime',

                'visibility' => true,
                'description' => 'La Tom Yum Goong è una zuppa piccante e aspra a base di brodo di gamberi, arricchita con funghi, erba cipollina, peperoncino e lime. È nota per la sua combinazione di sapori freschi, piccanti e acidi, ed è un piatto classico della cucina thailandese.',
                'restaurant_id' => 34,
            ],
            [
                'name' => 'Green Curry',
                'img_url' => 'https://media.istockphoto.com/id/174682480/it/foto/curry-verde-tailandese-moderno.jpg?s=612x612&w=0&k=20&c=3RwuuOvgbV_LWqspmBmkTYEYBtqLQGb0DHgzMycmUqU=',
                'price' => 14.75,
                'ingredients' => 'Pollo, curry verde, latte di cocco, peperoni, basilico',

                'visibility' => true,
                'description' => 'Il Green Curry è un curry piccante e aromatico preparato con pollo, peperoni, foglie di basilico e una miscela di spezie fresche. È cotto in una salsa a base di latte di cocco, che conferisce al piatto una consistenza cremosa e un sapore ricco.',
                'restaurant_id' => 33,
            ],
            [
                'name' => 'Som Tum',
                'img_url' => 'https://media.istockphoto.com/id/1395642907/it/foto/insalata-di-papaya-verde-in-un-piatto-nero-su-un-tavolo-di-legno-vista-dallalto-vista-dallalto.jpg?s=612x612&w=0&k=20&c=8Uy1VwrEEdb3Wap3mjxId0N9w2nKIWRZHY6ekiY6r-k=',
                'price' => 9.99,
                'ingredients' => 'Papaya verde, pomodori, fagiolini, arachidi, peperoncino',

                'visibility' => true,
                'description' => 'La Som Tum, o insalata di papaya verde, è una vivace combinazione di sapori dolci, salati, aspri e piccanti. Preparata con papaya verde grattugiata, pomodori, fagiolini, arachidi e peperoncino, è un piatto fresco e leggero perfetto per i giorni caldi.',
                'restaurant_id' => 35,
            ],
            [
                'name' => 'Massaman Curry',
                'img_url' => 'https://media.istockphoto.com/id/1151284259/it/foto/curry-massaman-di-manzo-con-riso-su-tavola-di-legno-cibo-tailandese.jpg?s=612x612&w=0&k=20&c=ADzbFSlHhD80cJRXAFatvX0Km0QmP1bZ-na3fC260p0=',
                'price' => 15.25,
                'ingredients' => 'Manzo, curry massaman, patate, cipolle, arachidi',

                'visibility' => true,
                'description' => 'Il Massaman Curry è un curry dal sapore ricco e avvolgente, preparato con carne di manzo tenera, patate, cipolle e arachidi. La sua caratteristica distintiva è la miscela unica di spezie, che includono cannella, chiodi di garofano e cardamomo, che conferiscono al piatto un sapore profondo e complesso.',
                'restaurant_id' => 35,
            ],
            [
                'name' => 'Mango Sticky Rice',
                'img_url' => 'https://media.istockphoto.com/id/1147326546/it/foto/mango-e-riso-appiccicoso-dolce-tradizionale-tailandese.jpg?s=612x612&w=0&k=20&c=dl6_uUZLmqdP4TsEtnzKGVvKabYjRavMtdi45J5wDVk=',
                'price' => 8.50,
                'ingredients' => 'Riso glutinoso, mango maturo, latte di cocco, zucchero',

                'visibility' => true,
                'description' => 'Il Mango Sticky Rice è un dessert tradizionale tailandese amato in tutto il mondo. È composto da riso glutinoso cotto al vapore, condito con latte di cocco e zucchero, servito con fette di mango maturo. La combinazione di sapori dolci, cremosi e tropicali lo rende un piatto irresistibile.',
                'restaurant_id' => 35,
            ],
            [
                'name' => 'Pad See Ew',
                'img_url' => 'https://media.istockphoto.com/id/1327025495/it/foto/pad-vedere-piastra-ew.jpg?s=612x612&w=0&k=20&c=jTNbWCC-yH59gFhEeieoeW62hSZWMS0L6HpYK3nyyzo=',
                'price' => 11.50,
                'ingredients' => 'Tagliatelle di riso, pollo, broccoli, salsa di soia, uova',

                'visibility' => true,
                'description' => 'Il Pad See Ew è un piatto di tagliatelle di riso saltate in padella con pollo, broccoli, salsa di soia e uova. È un piatto semplice ma delizioso, con una combinazione di sapori dolci, salati e leggermente affumicati.',
                'restaurant_id' => 36,
            ],
            [
                'name' => 'Red Curry',
                'img_url' => 'https://media.istockphoto.com/id/1225795312/it/foto/zuppa-di-curry-di-tofu-con-verdure.jpg?s=612x612&w=0&k=20&c=gmcDaoMQxuChaS7VZIUvfY5JxvOCiQ2WKD-mdueAPVg=',
                'price' => 13.99,
                'ingredients' => 'Gamberetti, curry rosso, latte di cocco, peperoni, basilico',

                'visibility' => true,
                'description' => 'Il Red Curry è un curry piccante e cremoso preparato con gamberetti, peperoni, basilico e una miscela di spezie rosse. È cotto in una salsa a base di latte di cocco, che bilancia perfettamente il piccante delle spezie. È un piatto gustoso che soddisfa tutti i palati.',
                'restaurant_id' => 36,
            ],
            [
                'name' => 'Tom Kha Gai',
                'img_url' => 'https://media.istockphoto.com/id/1284712912/it/foto/cibo-tradizionale-tailandese-tom-kha-gai-in-ciotola.jpg?s=612x612&w=0&k=20&c=QuTWnCX1bBW9qMe5KdiYjUyts9rVG6Z_6SzFmVCBEQ0=',
                'price' => 12.75,
                'ingredients' => 'Pollo, funghi, lemongrass, lime, latte di cocco',

                'visibility' => true,
                'description' => 'Il Tom Kha Gai è una zuppa di pollo aromatica e cremosa, preparata con funghi, lemongrass, lime e latte di cocco. È una combinazione unica di sapori dolci, piccanti e aspri, che la rende una zuppa deliziosa e confortante perfetta per qualsiasi occasione.',
                'restaurant_id' => 36,
            ],
            [
                'name' => 'Khao Pad',
                'img_url' => 'https://media.istockphoto.com/id/1221574194/it/foto/street-food-tailandese-riso-al-gelsomino-fritto-khao-phad-kung-con-gamberi-e-cipollotti-con.jpg?s=612x612&w=0&k=20&c=dQeLbIGK6iP_W1czCJKPD-5Tfzkdlytq2uhHU0O-T0w=',
                'price' => 10.25,
                'ingredients' => 'Riso, pollo, uova, cipolle, carote, salsa di soia',

                'visibility' => true,
                'description' => 'Il Khao Pad, o riso fritto thailandese, è un piatto semplice ma gustoso preparato con riso, pollo, uova, cipolle, carote e salsa di soia. È un piatto versatile che può essere consumato da solo o accompagnato da altre pietanze thailandesi.',
                'restaurant_id' => 37,
            ],
            [
                'name' => 'Papaya Salad',
                'img_url' => 'https://media.istockphoto.com/id/527439207/it/foto/som-tam-thai-verde-tailandese-insalata-di-papaya-con-arachidi.jpg?s=612x612&w=0&k=20&c=es5bfgYlcheRRbPzehbhcvgW12bhSKiGbp8CFz6F5Pc=',
                'price' => 9.25,
                'ingredients' => 'Papaya verde, pomodori, fagiolini, arachidi, peperoncino',
                'visibility' => true,
                'description' => 'La Papaya Salad è un\'insalata rinfrescante e piccante preparata con papaya verde, pomodori, fagiolini, arachidi e peperoncino. È una combinazione di sapori vivaci e contrastanti, che la rendono un\'ottima aggiunta a qualsiasi pasto thailandese',
                'restaurant_id' => 37,
            ],
            [
                'name' => 'Phat Si-io',
                'img_url' => 'https://media.istockphoto.com/id/1212812600/it/foto/pad-gamberi-vedere-ew-isolato-su-sfondo-bianco-pad-see-ew-%C3%A8-un-piatto-di-cucina-tailandese-con.jpg?s=612x612&w=0&k=20&c=S8ZUuk0e_uWcj5ZXb46-2HCWmPzLsq73P7X8kQdqwiY=',
                'price' => 11.75,
                'ingredients' => 'Tagliatelle di riso, maiale, broccoli, salsa di ostriche, salsa di soia',

                'visibility' => true,
                'description' => 'Il Phat Si-io è un piatto di tagliatelle di riso saltate in padella con maiale, broccoli e una salsa ricca di ostriche e salsa di soia. È un piatto saporito e appagante, perfetto per un pranzo veloce o una cena confortante.',
                'restaurant_id' => 37,
            ],
            [
                'name' => 'Gaeng Keow Wan',
                'img_url' => 'https://media.istockphoto.com/id/1267616276/it/foto/famoso-curry-di-cocco-verde-tailandese-di-fama-internazionale-gaeng-keow-wan-gai-con-pollo-in.jpg?s=612x612&w=0&k=20&c=eBfjooh2Gz6eCIz3de_F7cWNmJLli1mHMoyftBTTbCQ=',
                'price' => 14.50,
                'ingredients' => 'Pollo, curry verde, melanzane, peperoni, basilico',

                'visibility' => true,
                'description' => 'Il Gaeng Keow Wan è un curry verde cremoso e speziato preparato con pollo, melanzane, peperoni e basilico. È cotto in una salsa a base di curry verde e latte di cocco, che conferisce al piatto un sapore ricco e avvolgente. È un piatto delizioso che ti farà venire l\'acquolina in bocca.',
                'restaurant_id' => 38,
            ],
            [
                'name' => 'Yam Neua',
                'img_url' => 'https://media.istockphoto.com/id/1648055182/it/foto/nasi-bakar-%C3%A8-riso-con-un-contorno-avvolto-in-foglie-di-banana-e-poi-grigliato-su-un-fuoco-o.jpg?s=612x612&w=0&k=20&c=8IKSMRHaogEEmDV2foEgurk5DnDUm3_xVsTcJBe1sHQ=',
                'price' => 13.50,
                'ingredients' => 'Bistecca di manzo, pomodori, cipolle, menta, peperoncino',
                'visibility' => true,
                'description' => 'Il Yam Neua è un\'insalata di manzo thailandese fresca e saporita, preparata con bistecca di manzo tagliata a fette sottili, pomodori, cipolle, menta e peperoncino. È condita con una salsa piccante a base di lime, che aggiunge un tocco di acidità e freschezza al piatto.',
                'restaurant_id' => 38,
            ],
            [
                'name' => 'Pad Kee Mao',
                'img_url' => 'https://media.istockphoto.com/id/1208592696/it/foto/thai-drunken-noodles-o-pad-kee-mao-in-ciotola-nera-su-sfondo-ardesia-scura-drunken-noodles-%C3%A8.jpg?s=612x612&w=0&k=20&c=v0cPUqRJXmJu9WZ_muatcvQFABfjnKGlG8csfcpn4JE=',
                'price' => 12.99,
                'ingredients' => 'Tagliatelle di riso, pollo, peperoni, basilico, peperoncino',

                'visibility' => true,
                'description' => 'Il Pad Kee Mao è un piatto di tagliatelle di riso saltate in padella con pollo, peperoni, basilico e peperoncino. È un piatto piccante e saporito, perfetto per chi ama i sapori audaci della cucina thailandese.',
                'restaurant_id' => 39,
            ],
            [
                'name' => 'Red Curry',
                'img_url' => 'https://media.istockphoto.com/id/1130228942/it/foto/indiano-dal-lenticchie-tradizionali-indiane-curry-piccante-dhal-indiano-in-ciotola-spezie-erbe.jpg?s=612x612&w=0&k=20&c=zClYLR_rDNVUJ1vAp26XHvM7mLJoTJx3y7mt9FNOnws=',
                'price' => 13.99,
                'ingredients' => 'Gamberetti, curry rosso, latte di cocco, peperoni, basilico',

                'visibility' => true,
                'description' => 'Il Red Curry è un curry piccante e cremoso preparato con gamberetti, peperoni, basilico e una miscela di spezie rosse. È cotto in una salsa a base di latte di cocco, che bilancia perfettamente il piccante delle spezie. È un piatto gustoso che soddisfa tutti i palati.',
                'restaurant_id' => 39,
            ],

            // piatti italiani 

            [
                'name' => 'Spaghetti alla Carbonara',
                'img_url' => 'https://media.istockphoto.com/id/1312758295/it/foto/pasta-tradizionale-italiana-alla-carbonara-con-uova-di-guanciale-e-pecorino.jpg?s=612x612&w=0&k=20&c=Y1ntgQ6qGSNoSFd1s8OaB9AkElPdsLFX_uC50UoUOUs=',
                'price' => 12.99,
                'ingredients' => 'Spaghetti, guanciale, uova, pecorino romano, pepe nero',
                'visibility' => true,
                'description' => 'Gli spaghetti alla carbonara sono un classico della cucina romana. La salsa cremosa è fatta con uova, pecorino romano e pepe nero. Il guanciale croccante aggiunge sapore e consistenza a questo piatto iconico.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Pizza Margherita',
                'img_url' => 'https://media.istockphoto.com/id/1414575281/it/foto/una-deliziosa-e-gustosa-pizza-italiana-margherita-con-pomodori-e-mozzarella-di-bufala.jpg?s=612x612&w=0&k=20&c=NTxFTkkUXQu13aoDy8vW9SK27GsqOufOPNWpjycCmok=',
                'price' => 10.50,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, basilico',
                'visibility' => true,
                'description' => 'La pizza Margherita è un simbolo della cucina italiana. La sua semplicità mette in risalto gli ingredienti di qualità: pomodoro fresco, mozzarella di bufala, basilico e olio d\'oliva. Un classico che non delude mai.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Quattro Stagioni',
                'img_url' => 'https://media.istockphoto.com/id/675077466/it/foto/pizza-quattro-stagioni-con-prosciutto-e-carciofi.jpg?s=612x612&w=0&k=20&c=spwQ93Prksh_Aw20GBv5TqPeER5RscAugpJE_ZGCnpc=',
                'price' => 11.99,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, funghi, prosciutto cotto, carciofini, olive nere, origano',
                'visibility' => true,
                'description' => 'La Pizza Quattro Stagioni è una deliziosa pizza che rappresenta le quattro stagioni dell\'anno. Divisa in quattro sezioni, è condita con pomodoro, mozzarella, funghi, prosciutto cotto, carciofini e olive nere. Ogni morso offre una combinazione di sapori unici che soddisferanno tutti i gusti.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Diavola',
                'img_url' => 'https://media.istockphoto.com/id/177375131/it/foto/pizza-diavola-con-salamy.jpg?s=612x612&w=0&k=20&c=OvP21qLk3pmBSO1_3CuUtdsV0ptxtj38eQe3kzgstQA=',
                'price' => 10.75,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, salame piccante, peperoncini, peperoni, olio d\'oliva',
                'visibility' => true,
                'description' => 'La Pizza Diavola è una scelta perfetta per gli amanti del piccante. Condita con pomodoro, mozzarella, salame piccante, peperoncini e peperoni, questa pizza è un esplosione di sapori audaci e intensi. L\'olio d\'oliva aggiunge un tocco di ricchezza e profondità al piatto.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Capricciosa',
                'img_url' => 'https://media.istockphoto.com/id/1456338919/it/foto/pizza-tradizionale-capricciosa-pronta-da-mangiare-poster-per-ristorante.jpg?s=612x612&w=0&k=20&c=TL9JNZLPk9O4s32YYlgyHZU2RZGHoAjJ2IGK-TAPM8E=',
                'price' => 12.50,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, prosciutto cotto, funghi, carciofini, olive nere, origano',
                'visibility' => true,
                'description' => 'La Pizza Capricciosa è una pizza generosamente condita con una varietà di ingredienti. Pomodoro, mozzarella, prosciutto cotto, funghi, carciofini e olive nere si uniscono per creare un piatto gustoso e appagante. La combinazione di sapori e la freschezza degli ingredienti rendono questa pizza una vera delizia.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Frutti di Mare',
                'img_url' => 'https://media.istockphoto.com/id/1199274556/it/foto/pizza-italiana-a-base-di-pesce-con-calamari-cozze-e-gamberetti.jpg?s=612x612&w=0&k=20&c=-KEyvshv---npV5AxmFJh6k-5Koen4BbbX2KV5wzeGQ=',
                'price' => 13.99,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, frutti di mare (calamari, gamberetti, cozze, vongole), aglio, prezzemolo',
                'visibility' => true,
                'description' => 'La Pizza Frutti di Mare è una delizia per gli amanti del mare. Condita con pomodoro, mozzarella e una varietà di frutti di mare tra cui calamari, gamberetti, cozze e vongole, questa pizza offre un sapore fresco e marino. L\'aglio e il prezzemolo aggiungono un tocco aromatico che completa il piatto.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Risotto ai Funghi Porcini',
                'img_url' => 'https://media.istockphoto.com/id/636781990/it/foto/risotto-con-funghi-porcini-e-primo-tempo-timo-orizzontale.jpg?s=612x612&w=0&k=20&c=pqWrTtgZCXSkfqG5Nen8j31ZosCySv0u6Lxj3H1eqI8=',
                'price' => 14.75,
                'ingredients' => 'Riso Carnaroli, funghi porcini, cipolla, brodo di carne, prezzemolo',
                'visibility' => true,
                'description' => 'Il risotto ai funghi porcini è un piatto cremoso e avvolgente, arricchito dal sapore deciso dei funghi porcini. Preparato con riso Carnaroli, cipolla, brodo di carne e prezzemolo, è un comfort food perfetto per le serate autunnali.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Lasagne alla Bolognese',
                'img_url' => 'https://media.istockphoto.com/id/535851351/it/foto/lasagne-su-un-piatto-quadrato-bianco.jpg?s=612x612&w=0&k=20&c=QyjunsfRaaFLR8qb7p2jSEjEJsdx0zdPjMsk3Nb4huE=',
                'price' => 16.99,
                'ingredients' => 'Fogli di pasta all\'uovo, ragù alla bolognese, besciamella, parmigiano reggiano',
                'visibility' => true,
                'description' => 'Le lasagne alla bolognese sono un piatto ricco e soddisfacente. Strati di pasta all\'uovo si alternano con ragù alla bolognese, besciamella e parmigiano reggiano. Il risultato è un piatto sfizioso che conquista tutti i palati.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Filetto di Manzo al Pepe Verde',
                'img_url' => 'https://media.istockphoto.com/id/640113486/it/foto/bistecca-di-controfiletto-rara-media-con-salsa-chimichurri.jpg?s=612x612&w=0&k=20&c=N_OqhzmFbyO-9NX-GpG7EW9Z3EtKGP-HjZLKxTwdmTs=',
                'price' => 19.99,
                'ingredients' => 'Filetto di manzo, pepe verde, burro, panna, brandy, sale, pepe',
                'visibility' => true,
                'description' => 'Il Filetto di Manzo al Pepe Verde è un piatto classico della cucina italiana. Il tenero filetto di manzo è cotto alla perfezione e servito con una salsa cremosa al pepe verde, preparata con burro, panna e brandy. Il risultato è un piatto ricco e saporito che conquista ogni palato.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Saltimbocca alla Romana',
                'img_url' => 'https://media.istockphoto.com/id/636069746/it/foto/saline-di-manzo-con-salvia-e-prosciutto-da-vicino-orizzontale.jpg?s=612x612&w=0&k=20&c=HBM7qp2xNa2MEM_9iq_tuAk5OMeBlJgiUnIsA3m3dp0=',
                'price' => 16.50,
                'ingredients' => 'Fettine di vitello, prosciutto crudo, salvia, burro, vino bianco secco, sale, pepe',
                'visibility' => true,
                'description' => 'Lo Saltimbocca alla Romana è un piatto tradizionale romano che delizia i sensi con i suoi sapori intensi. Le fettine di vitello sono avvolte con prosciutto crudo e foglie di salvia, quindi saltate in padella con burro e vino bianco secco. Il risultato è un piatto succulento e pieno di gusto.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Ossobuco alla Milanese',
                'img_url' => 'https://media.istockphoto.com/id/541298852/it/foto/ossobuco.jpg?s=612x612&w=0&k=20&c=TLTLKDEqIFDtupq89uMEF7jhvHuZ6SP1YEN8_izY2ho=',
                'price' => 22.50,
                'ingredients' => 'Fette di ossobuco, vino bianco, brodo di carne, cipolla, sedano, carota, prezzemolo',
                'visibility' => true,
                'description' => 'L\'ossobuco alla milanese è un piatto tradizionale della cucina lombarda. Le fette di ossobuco vengono brasate lentamente in un sugo aromatico fatto con vino bianco, brodo di carne e verdure. Il risultato è una carne tenera e saporita, perfetta da gustare con un contorno di risotto allo zafferano.',
                'restaurant_id' => 30,
            ],
            [
                'name' => 'Tiramisù',
                'img_url' => 'https://media.istockphoto.com/id/1248489319/it/foto/torta-tiramis%C3%B9-con-menta.jpg?s=612x612&w=0&k=20&c=dXJ8_czKwX_M8FLLqQWiM4jS4KoFIN1AbJtLuW_M-wo=',
                'price' => 8.99,
                'ingredients' => 'Savoiardi, caffè espresso, mascarpone, uova, cacao in polvere',

                'visibility' => true,
                'description' => 'Il tiramisù è un dessert italiano amato in tutto il mondo. Strati di biscotti savoiardi inzuppati nel caffè vengono alternati con una crema di mascarpone leggera e soffice. Una spolverata di cacao in polvere completa questo dolce decadente e irresistibile.',
                'restaurant_id' => 30,
            ],
            [
                'name' => 'Ravioli al Tartufo',
                'img_url' => 'https://media.istockphoto.com/id/1144972017/it/foto/piatto-di-deliziosa-pasta-italiana-con-chips-di-funghi-al-tartufo-sul-tavolo-in-ristorante-di.jpg?s=612x612&w=0&k=20&c=ePDPswQxAXXyHVZVlzun0xOGD3ILDbr8Qt6yTtLNmfk=',
                'price' => 18.50,
                'ingredients' => 'Ravioli ripieni di ricotta e spinaci, burro, tartufo nero',
                'visibility' => true,
                'description' => 'I ravioli al tartufo sono un piatto raffinato e lussuoso. I ravioli ripieni di ricotta e spinaci vengono conditi con una salsa al burro e tartufo nero appena grattugiato. Ogni morso è un\'esplosione di sapori terrosi e burrosi.',
                'restaurant_id' => 30,
            ],
            [
                'name' => 'Bruschetta al Pomodoro',
                'img_url' => 'https://media.istockphoto.com/id/1194656666/it/foto/bruschetta-italiana.jpg?s=612x612&w=0&k=20&c=RalUBEQs1QWO6Bl3r0hrkWh-AUlAENWBEL12_Qiy6t0=',
                'price' => 7.25,
                'ingredients' => 'Pane casereccio, pomodori maturi, aglio, basilico, olio d\'oliva',
                'visibility' => true,
                'description' => 'La bruschetta al pomodoro è un antipasto semplice ma gustoso. Fette di pane casereccio vengono grigliate e poi strofinate con aglio fresco. I pomodori maturi vengono tagliati a cubetti e conditi con basilico, olio d\'oliva, sale e pepe, per creare un antipasto fresco e saporito.',
                'restaurant_id' => 31,
            ],
            [
                'name' => 'Saltimbocca alla Romana',
                'img_url' => 'https://media.istockphoto.com/id/636069680/it/foto/manzo-italiano-saltimbocca-con-salvia-prosciutto-e-limone-primo-up.jpg?s=612x612&w=0&k=20&c=b-o8tOszZQX-U233rNOUHHZuhdXsWmbPSnVJYa0EYDo=',
                'price' => 20.75,
                'ingredients' => 'Fette di vitello, prosciutto crudo, salvia, vino bianco, burro',
                'visibility' => true,
                'description' => 'Lo saltimbocca alla romana è un piatto succulento e aromatico. Le fette di vitello vengono avvolte in prosciutto crudo e aromatizzate con foglie di salvia. Vengono poi brasate in padella con vino bianco e burro, fino a diventare tenere e saporite.',
                'restaurant_id' => 31,
            ],
            [
                'name' => 'Caprese Salad',
                'img_url' => 'https://media.istockphoto.com/id/1173160734/it/foto/pomodoro-basilico-mozzarella-insalata-caprese-con-aceto-balsamico-e-olio-doliva.jpg?s=612x612&w=0&k=20&c=FiHV754V6q0Gm9NbYXHqZ3wkssl821X88dOI2Tat_Rw=',
                'price' => 9.50,
                'ingredients' => 'Pomodori maturi, mozzarella di bufala, basilico, olio d\'oliva, sale, pepe',
                'visibility' => true,
                'description' => 'La Caprese Salad è un\'insalata fresca e colorata, perfetta per l\'estate. Pomodori maturi e mozzarella di bufala vengono alternati con foglie di basilico fresco. Condita con olio d\'oliva, sale e pepe, è un\'esplosione di sapori mediterranei.',
                'restaurant_id' => 32,
            ],
            [
                'name' => 'Gnocchi al Gorgonzola',
                'img_url' => 'https://media.istockphoto.com/id/823934736/it/foto/piatto-di-pasta-italiana.jpg?s=612x612&w=0&k=20&c=YGiTi5LNMJRzCBb6jlv1b1QEwGVNzcjLfXpRf2NeGIs=',
                'price' => 15.99,
                'ingredients' => 'Gnocchi di patate, gorgonzola, panna, noci',
                'visibility' => true,
                'description' => 'Gli gnocchi al gorgonzola sono un piatto cremoso e avvolgente. Gli gnocchi di patate vengono conditi con una salsa di gorgonzola e panna, e poi spolverati con noci tritate per un tocco croccante. È un piatto confortante che conquista tutti i palati.',
                'restaurant_id' => 32,
            ],
            [
                'name' => 'Tortellini in Brodo',
                'img_url' => 'https://media.istockphoto.com/id/174861713/it/foto/tortellini-in-brodo-ristretto.jpg?s=612x612&w=0&k=20&c=DE7cTvwbaD6JERtBWWtP7Vc_ydIBIGHM5dD_DzoFX1k=',
                'price' => 12.25,
                'ingredients' => 'Tortellini di carne, brodo di pollo, prezzemolo',
                'visibility' => true,
                'description' => 'I tortellini in brodo sono un comfort food classico della cucina emiliana. I tortellini di carne vengono cotti in un brodo di pollo ricco e aromatico, fino a diventare teneri e saporiti. Guarniti con prezzemolo fresco tritato, sono perfetti per scaldarsi nelle fredde giornate invernali.',
                'restaurant_id' => 32,
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish = new Dish();

            $newDish->name = $dish['name'];
            $newDish->img_url = $dish['img_url'];
            $newDish->price = $dish['price'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->visibility = $dish['visibility'];
            $newDish->description = $dish['description'];
            $newDish->restaurant_id = $dish['restaurant_id'];
            $newDish->save();
        }
    }
}
