<?php
ini_set('date.timezone', 'ETC/GMT+8');
$today = "";
if (isset($_GET['day']))
{
    $today=($_GET['day']);
    
}else{
    $today=date('l');
}

switch($today){
    
    case 'Monday':  

        $restaurant  = "Porkchop and Co.";
        $brunch      = "The Chris Horton with beef cheek pastrami";
        $address     = "5451 Leary Ave NW Seattle, WA 98107";
        $phone       = "(206) 257-5761";
        $time        = "9AM–3PM";
        $img         = "1.jpg";
        $alt         = "Nickrey";
        $description = "This cheery Ballard diner focuses heavily on sourcing from local farms for its rotating comfort food menu, whose highlights include the Chris Horton with beef cheek pastrami, kimchi, cheesy grits, and poached eggs, as well as anything with biscuits. Chef and owner Paul Osher also gets creative with the latest finds from the farmers markets in town."; 
    break;

    case 'Tuesday':
        $restaurant  = "Joule";
        $brunch      = "green shakshouka";
        $address     = "3506 Stone Way N Seattle, WA 98103";
        $phone       = "(206) 632-5685";
        $time        = "10am - 2pm";
        $img         = "2.jpg";
        $alt         = "Alex Lau";
        $description = "At her lovely Wallingford restaurant, Rachel Yang shows off her ability to weave bold Korean flavors into damn near everything. A paper menu offers a la carte staples like green shakshouka, grits with Chinese sausage, and barbecue pork bao. Diners can also opt to partake in the buffet, which delivers an impressive selection based on a rotating theme like 'classic flavors from Spain.' Even the cocktails successfully incorporate ingredients like makgeolli and black vinegar at brunch."; 

    break;

    case 'Wednesday':
        $restaurant  = "The Wandering Goose";
        $brunch      = "Seasonal veggies topped with poached eggs";
        $address     = "403 15th Ave E Seattle, WA 98112";
        $phone       = "(206) 323-9938";
        $time        = "OPEN 7-4 EVERYDAY";
        $img         = "3.jpg";
        $alt         = "Andrew Scrivani";
        $description = "Diners who can squeeze into this narrow Capitol Hill spot are rewarded with beautiful skillets filled with ingredients like melty brisket and seasonal veggies topped with poached eggs. A biscuit sandwich is also an amazing treat, so long as whoever’s eating it saves room for a pastry on the side."; 

    break;

    case 'Thursday':
        $restaurant  = "Tilikum Place Café";
        $brunch      = "the Dutch baby pancake";
        $address     = "407 Cedar St Seattle, WA 98121";
        $phone       = "(206) 282-4830";
        $time        = "8am-3pm";
        $img         = "4.webp";
        $alt         = "Lauren Volo";
        $description = "Despite its proximity to Seattle Center and the Space Needle, this place is no tourist trap. And with a distinctly European feel and an eclectic menu, classic Tilikum Place Cafe has one definitive star: the Dutch baby pancake, whose cast iron-baked goodness has earned fame, far and wide, for the restaurant."; 

    break;

    case 'Friday':
        $restaurant  = "Mamnoon";
        $brunch      = "baba ganoush";
        $address     = "1508 Melrose Ave Seattle, WA 98122";
        $phone       = "(206) 906-9606";
        $time        = "11a - 2:30p sa-su";
        $img         = "5.jpg";
        $alt         = "Tori Avey";
        $description = "For some reason, this large, art-filled restaurant on Capitol Hill is nowhere near as bustling as the streets outside when it comes time for brunch, despite the always excellent food. The best way to go about a brunch at Mamnoon is to order a smattering of menu items and create an epic spread for sharing: baba ganoush, shawarma, za'atar bread with thyme and yogurt, lamb sausage, and flawless hummus with fresh flatbread."; 

    break;

    case 'Saturday':
        $restaurant  = "Stateside";
        $brunch      = "Soups and noodles";
        $address     = "300 E Pike St Seattle, WA 98122";
        $phone       = "(206) 557-7273";
        $time        = "10a -  2p";
        $img         = "6.jpg";
        $alt         = "Courtesy of Stateside";
        $description = "Stateside's doing outstanding work at dinner, and the weekend brunch is a great addition, now available Saturday and Sunday from 10 a.m. to 2 p.m. Look for Vietnamese-inspired twists on classic breakfast items, plus more traditional fare like soups and noodles, all served in a tropically-inspired space on Capitol Hill."; 

    break;

    case 'Sunday':
        $restaurant  = "Dough Zone Dumpling House";
        $brunch      = "Dim sum brunch ";
        $address     = "504 5th Ave S Ste 109, Seattle WA, 98104";
        $phone       = "(425) 641-8000";
        $time        = "11:00 AM - 5:00 PM";
        $img         = "7.jpg";
        $alt         = "Dough Zone/FB";
        $description = "Seattle-area favorite Dough Zone Dumpling House is spreading Chinese dumpling evangelism across the land with its expanding regional chainlet. Diners should go for dim sum brunch and fill up on all the delicious dough a person can handle. It can be an intense experience, with speedy service that’s warm enough but decidedly no-frills. This isn’t the place to go for someone seeking a refined, relaxed brunch — but hell, those dumplings would be fantastic served on napkins."; 

    break;

    default:
        $restaurant  = "";
        $brunch      = "";
        $address     = "";
        $phone       = "";
        $time        = "";
        $img         = "";
        $alt         = "";
        $description = "";

}
        
?>