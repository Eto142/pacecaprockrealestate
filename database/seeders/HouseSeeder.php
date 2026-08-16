<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Seeds the `houses` table from the production snapshot (43 rows).
 *
 * Generated from the eagnxsfnnx_pace dump; primary keys are preserved so the
 * foreign keys between countries, houses, house_images and users stay intact.
 */
class HouseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('houses')->insert([
            [
                'id' => '49',
                'country_id' => '9',
                'slug' => 'guildford',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Guildford, United Kingdom',
                'address' => 'Guildford',
                'description' => 'Mill House Cottage is wonderfully situated next to the #riverTillingbourne and the Chantries yet close by to #Guildford and the amenities it has to offer. 
.
.
.
💷 Guide price $1,973,000
🏡 4 bedrooms
🔎 Search ID: GLD190089',
                'original_price' => '1973000',
                'selling_price' => '1973000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '83',
                'created_at' => '2023-03-17 04:14:19',
                'updated_at' => '2023-03-26 02:23:22',
            ],
            [
                'id' => '51',
                'country_id' => '9',
                'slug' => 'ipswich-suffolk',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Ipswich, United Kingdom',
                'address' => 'Ipswich, Suffolk',
                'description' => 'Woodlands dates back to 1845, and this is the first time it\'s been brought to the market. 

This grand country property boasts seven bedrooms, four reception rooms, and several outbuildings and sits within 11.97 acres. 

The house is set in a secluded and picturesque position in rural Suffolk, with the benefits of excellent connectivity.

📍 How much? $2.35m 
📍 Where? Ipswich, Suffolk',
                'original_price' => '2350000',
                'selling_price' => '2350000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '58',
                'created_at' => '2023-03-17 04:21:27',
                'updated_at' => '2023-03-26 02:42:02',
            ],
            [
                'id' => '52',
                'country_id' => '7',
                'slug' => 'florida',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Florida, United States',
                'address' => 'Florida',
                'description' => 'Jupiter Florida’s #1 Home 🔥 Offered exclusively by Vanaman Real Estate Group
..
Price $18,500,000',
                'original_price' => '18500000',
                'selling_price' => '18500000',
                'trending' => '1',
                'status' => 'Sold',
                'rating' => '128',
                'created_at' => '2023-03-17 04:26:08',
                'updated_at' => '2023-03-26 02:42:15',
            ],
            [
                'id' => '53',
                'country_id' => '7',
                'slug' => 'miami-fl',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Florida, United States',
                'address' => 'SW 55th Ave, Miami, FL 33143',
                'description' => '🍃 Serene & Timeless In High Pines 🍃
•
•
• 
No luxury is spared in this expertly designed home situated on a quiet block of High Pines. This purposefully designed property features 4 bedrooms, 3 bathrooms, and 2 half bathrooms while maximizing indoor and outdoor spaces for both tranquil living and entertainment. Its contemporary design evokes timeless, warm, and airy sensations throughout the space. Master bedroom opens to spacious terrace and features a truly serene, spa-like bathroom along with a showroom closet. Sophisticated office, upstairs den that can be converted to a 5th bedroom and gym adorn the rest of the home. The private backyard features lap pool, outside kitchen and lounge area all perfect for continuous relaxation. This home makes for the ideal South Florida style of living.
•
•
📍7545 SW 55th Ave, Miami, FL 33143
🛏️ 4• 🛁 3/2 • 📐 4,243 Sq. Ft.
💥 Asking: $5,700,000💥',
                'original_price' => '5700000',
                'selling_price' => '5700000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '113',
                'created_at' => '2023-03-17 04:30:57',
                'updated_at' => '2023-03-26 02:44:12',
            ],
            [
                'id' => '54',
                'country_id' => '9',
                'slug' => 'eastdulwich',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'East Dulwich, United Kingdom',
                'address' => 'East Dulwich',
                'description' => 'Nestled in the heart of #EastDulwich, this attractive #Victorianhome has been tastefully modernised throughout and is ideal for family living. 
.
.
.
💵 Guide price $1,907,000
🏡 5 bedrooms
🔎 Search ID: DUL012287250
✉️ DM us for further details',
                'original_price' => '1907000',
                'selling_price' => '1907000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '67',
                'created_at' => '2023-03-17 04:40:04',
                'updated_at' => '2023-03-26 02:44:28',
            ],
            [
                'id' => '55',
                'country_id' => '7',
                'slug' => 'florida',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Florida, United States',
                'address' => 'Florida',
                'description' => 'This incomparable grande estate spanning over 3.8 acres of luxuriant land is one you do not see every day! Welcome to this monumental property that boasts 10 bd and 9.5 ba with over 14,000 square feet of living space. As you enter this magnificent home, soaring ceilings and spacious living/dining areas greet you with tons of natural light throughout, beautiful marble and wood floors and custom doors from Spain. The oversized primary suite along with the additional rooms portray their own individual personalities and luxe designs. A home you will never need nor want to leave, as one can find entertainment between the game room, inside full basketball court, home theatre, resort-style pool with summer kitchen and more. Don\'t miss the opportunity to own this extraordinary one of a kind estate
•
•
📍16260 Saddle Club Rd, Weston, FL 33326
🛏 10 • 🛁 9.5 • 📐 14,294 Sq. Ft.
💥 $7,500,000💥',
                'original_price' => '7500000',
                'selling_price' => '7500000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '130',
                'created_at' => '2023-03-17 04:47:00',
                'updated_at' => '2023-03-26 02:44:44',
            ],
            [
                'id' => '56',
                'country_id' => '9',
                'slug' => 'belgravia',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Belgravia, United Kingdom',
                'address' => 'Belgravia',
                'description' => 'A prominently located mansion block overlooking #GrosvenorGardens. 8 Eaton Lane, #Belgravia has fantastic amenities, including a swimming pool, screen room, valet parking and much more.
Do you love this #property as much as we do?! Tell us in the comments below!
.
.
.
💵 Prices from $2,950,000
🏡 1 - 5 bedrooms
🔎 Search ID: PRD012264087
✉️ DM us for further details',
                'original_price' => '2950000',
                'selling_price' => '2950000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '107',
                'created_at' => '2023-03-17 04:52:12',
                'updated_at' => '2023-03-26 02:45:26',
            ],
            [
                'id' => '57',
                'country_id' => '7',
                'slug' => 'fort-lauderdale-fl',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Fort Lauderdale, Florida',
                'address' => 'Florida',
                'description' => 'Just Listed! 455 Bontona Ave $15,800,000
..

Created by sophisticated design and unequaled craftsmanship, we introduce to you T House, a true definition of timeless elegance. At T House, it is all about you! Sip serenely while sitting at the elegant floating bar or outdoor pool deck simply soaking in the aura and energy flows of 100 ft water frontage surroundings. Become immersed in the sunrise view of intracoastal and the sunset view of the downtown Fort Lauderdale skyline. 6 bedrooms, 7 full bathrooms, and 2 half baths are minimalist in design yet anchored with a carefully studied sense of artistic, logic and placement. Sitting in the prestigious Las Olas Isles known as “The Venice Of America”, you’ll be living in a boaters paradise with easy access to sandy beaches as well as the upscale commercial district of Las Olas Isles Blvd.
..
- 7,590 Interior Feet
-  6 beds 7.5 baths
- 100 Feet on the water',
                'original_price' => '15800000',
                'selling_price' => '15800000',
                'trending' => '1',
                'status' => 'Sold',
                'rating' => '89',
                'created_at' => '2023-03-17 04:57:25',
                'updated_at' => '2023-03-26 02:45:43',
            ],
            [
                'id' => '58',
                'country_id' => '7',
                'slug' => 'florida',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Florida, United States',
                'address' => 'Florida',
                'description' => 'Another one SOLD at the Bears Club in Jupiter! $3,800,000',
                'original_price' => '3800000',
                'selling_price' => '3800000',
                'trending' => '1',
                'status' => 'Sold',
                'rating' => '145',
                'created_at' => '2023-03-17 05:01:35',
                'updated_at' => '2023-03-26 02:45:57',
            ],
            [
                'id' => '59',
                'country_id' => '7',
                'slug' => 'florida',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Florida, United States',
                'address' => 'Florida',
                'description' => 'Designed to perfection! 1000 NE 72nd Ter Now Priced at $4,750,000
..
- 6 🛌 
- 4.5 🛀 
- 4,210 Sq Ft
- 11,000 Sq Ft Lot
- Built 2021',
                'original_price' => '4749998',
                'selling_price' => '4750000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '233',
                'created_at' => '2023-03-17 05:05:21',
                'updated_at' => '2023-03-26 02:46:12',
            ],
            [
                'id' => '60',
                'country_id' => '7',
                'slug' => 'florida',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Florida, United States',
                'address' => 'Florida',
                'description' => 'SOLD! Gorgeous New Construction in Keystone Islands! Killer deal $4,800,000 😮',
                'original_price' => '4800000',
                'selling_price' => '4800000',
                'trending' => '1',
                'status' => 'Sold',
                'rating' => '91',
                'created_at' => '2023-03-17 05:13:26',
                'updated_at' => '2023-03-26 02:46:30',
            ],
            [
                'id' => '61',
                'country_id' => '7',
                'slug' => 'california',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'California, United States',
                'address' => '123 Bay PI',
                'description' => 'NEW PRICE! 532 Neptune Ave • Encinitas • $17,995,000 💥💥

5 Bedrooms | 6 Bathrooms | 6,329 sqft

Perched on a 74-foot promontory with explosive panoramic ocean views, Crescent House is a one-of-a-kind architectural masterpiece. This unique, trophy property was created by three-time Architectural Digest Top 100 designer and visionary, Wallace E. Cunningham. Prominently featured in Architectural Digest Magazine in April 2005 and recently in the Season 3 premiere episode of HBO\'s Westworld, this unrivaled property is the ideal combination of the ultimate luxury living with impeccable quality and paramount location, making it a true work of art.',
                'original_price' => '17995000',
                'selling_price' => '17995000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '114',
                'created_at' => '2023-03-17 05:22:08',
                'updated_at' => '2023-03-26 02:46:44',
            ],
            [
                'id' => '62',
                'country_id' => '7',
                'slug' => 'los-angeles',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Los Angeles, United States',
                'address' => 'Los Angeles',
                'description' => 'NEW PRICE! 101 N Hudson Ave • Hancock Park • $22,995,000 📣

7 Bedrooms | 13 Bathrooms | 13,796 sqft 
 Situated in the desired Hancock Park on a large corner lot sits this timeless estate designed in 1929 by architect Roland E. Coate. Rich in history, featured in Architectural Digest in 1931, this one-of-a-kind estate has been meticulously restored by Mark Stevens Construction and MR DESIGN with the finest attention to detail and craftsmanship that is rarely found today. Recent upgrades throughout the 13,796 sf, have elevated the 7-bedroom, 13-bathroom property to a new level of grandeur that includes all the modern luxuries of today. This is a rare gem in a highly affluent prudent area that you do not want to miss!',
                'original_price' => '22995000',
                'selling_price' => '22995000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '58',
                'created_at' => '2023-03-17 05:30:51',
                'updated_at' => '2023-03-26 02:47:00',
            ],
            [
                'id' => '63',
                'country_id' => '9',
                'slug' => 'manchester',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Manchester, United Kingdom',
                'address' => 'Mill House',
                'description' => 'Located on a generous plot on one of Hale\'s premier streets, this #NewEnglandstyle, detached family home is immaculately finished and offers truly turnkey living. 
.
.
💷 Prices from $5,456,000
🏡 5 bedrooms
🔎 Search ID: WLM012328580
✉️ DM us for further details',
                'original_price' => '5455998',
                'selling_price' => '5456000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '82',
                'created_at' => '2023-03-17 05:41:55',
                'updated_at' => '2023-03-26 02:41:45',
            ],
            [
                'id' => '64',
                'country_id' => '9',
                'slug' => 'verbier',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Verbier, Switzerland',
                'address' => 'Verbier',
                'description' => 'Chalet Two Peaks is a beautiful new build #chalet enjoying #breathtaking views of the Combins mountains and the Bagnes valley below. The lower level is dedicated to #relaxation and wellness. It includes a sauna, hammam, bathroom and a wine cellar.
.
.
.
💷 Asking Price CHF 7,500,000
🏡 5 bedrooms
🔎 Search ID: RSI012238352
✉️ DM us for further details',
                'original_price' => '8081000',
                'selling_price' => '8081000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '188',
                'created_at' => '2023-03-17 05:51:31',
                'updated_at' => '2023-03-26 02:41:24',
            ],
            [
                'id' => '65',
                'country_id' => '9',
                'slug' => 'wapping',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Wapping, United Kingdom',
                'address' => 'Wapping',
                'description' => 'Green Banks Lofts is collection of 18 bespoke #apartments #forsale designed by award-winning developer, The Malins Group who specialise in the #residential conversion of historic, unusual and landmark buildings. Like this style? Tell us in the comments!
.
.
.
💷 Guide price £765,000
🏡 2 bedrooms
🔎 Search ID: CNW012269557
✉️ DM us for further details',
                'original_price' => '927600',
                'selling_price' => '927600',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '78',
                'created_at' => '2023-03-17 06:03:43',
                'updated_at' => '2023-03-26 02:40:07',
            ],
            [
                'id' => '66',
                'country_id' => '7',
                'slug' => 'florida',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Florida, United States',
                'address' => 'Florida',
                'description' => 'Just Listed! Boca Bombshell 💣
•
•
• 
Tucked behind one of Boca Raton’s most sought after communities, Boca Bridges Estates, discover this lavish 6 bedroom, 7.5 bathroom property surrounded by lush landscaping and endless lake views. With over 7900 square feet of living space, every room showcases unparalleled luxury, space and sophistication. Indulge in true indoor/outdoor living with master bedroom terrace overlooking crisp waters of zero edge pool and lake. Sprawling backyard offers unlimited opportunities for entertainment with your outdoor kitchen, pool and jacuzzi. Live the lavish Boca life year round with unrivaled community amenities, nearby exceptional dining, shopping and peace of mind of gated security.
•
•
📍17199 Brulee Breeze Way, Boca Raton, FL 33496
🛏 6 • 🛁 7.5 • 📐 7,954 Sq. Ft.
💥 Asking: $8,800,000💥',
                'original_price' => '8800000',
                'selling_price' => '8800000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '123',
                'created_at' => '2023-03-17 06:09:42',
                'updated_at' => '2023-03-26 02:39:49',
            ],
            [
                'id' => '67',
                'country_id' => '7',
                'slug' => 'los-angeles',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Los Angeles, United States',
                'address' => 'Los Angeles',
                'description' => 'JUST SOLD!  10259 Monte Mar Dr, Cheviot Hills Last offered at $7,295,000  With over 7,000 square feet, recently remodeled Cheviot Hills estate, located in one of the most desirable neighborhoods in Los Angeles, has it all. On the main floor, enjoy a formal living room, a private office with built-ins and a great room with a two-story vaulted ceiling. The kitchen offers Sub-Zero appliances, dual sinks, wine fridge, spacious island and butler\'s pantry for added convenience. The upper level features four bedrooms, all with en-suite bathrooms and a lounge with a balcony. The primary suite has a fireplace, vaulted ceilings, an impressively large walk-in closet and French doors that open to a private balcony with sweeping vistas of the golf course. The basement includes an extra bedroom, home theater and wet bar for entertaining. There is also central vacuuming throughout the house as well as a laundry room for added convenience. Step out onto the back terrace and take in your own saltwater pool oasis. With an overly large grass easement, you can take full advantage of the The Rancho Park Golf Course! Congrats to the new owners!',
                'original_price' => '7300000',
                'selling_price' => '7295000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '44',
                'created_at' => '2023-03-25 15:18:00',
                'updated_at' => '2023-03-26 02:39:36',
            ],
            [
                'id' => '68',
                'country_id' => '10',
                'slug' => 'san-francisco-ca-94116',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'San Francisco, CA',
                'address' => '822 Pacheco St',
                'description' => 'This home has it all! Wonderful 3 bedroom 2.5 bath home in the quiet and safe neighborhood of Golden Gate Heights! Live here comfortably with the most amazing views of the city. Spacious 2 level layout. First floor is all about entertaining and living with a 1/2 bath for guests. Top floor has three bedrooms and two full size bathrooms. Tons of closet space, storage, washer/ dryer and natural light.Could come furnished or partially furnished. Get all the comfort of the suburbs without leaving the city! Super close to Inner Sunset and West Portal restaurants and shops. The best schools for your children are nearby. Just a drive down the hill to Golden Gate Park and UCSF medical center. You won\'t be disappointed living here! Address - 8822 Pacheco St San Francisco, CA 94116
Listed by: Alex Dietrich 
Contact number:',
                'original_price' => '8000',
                'selling_price' => '7500',
                'trending' => '1',
                'status' => 'On Rent',
                'rating' => '35',
                'created_at' => '2023-03-26 23:57:57',
                'updated_at' => '2023-03-27 04:46:57',
            ],
            [
                'id' => '69',
                'country_id' => '11',
                'slug' => 'toronto',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Toronto, ON',
                'address' => '1928 Lake Shore Blvd W, Toronto, ON M6S 5A7',
                'description' => '1bd | 1ba | -- sqft 


Building overview
Brand New Never Lived In!! Waterfront Living At Its Finest! Enjoy The Sunrise, Beautiful Lakeview, Sunset And Unobstructed View Of Downtown With The Cn Tower. Very Close To The Gardiner Expressway, Qew, Hwy 427, Mimico Go Station, Airport, And Steps To The Lake.
Address - 1928 Lake Shore Blvd W, Toronto, ON M6S 5A7

Listed by: Sam Flagg

Contact Owner: Nathan (917) 512-8973',
                'original_price' => '1997',
                'selling_price' => '1850',
                'trending' => '1',
                'status' => 'On Rent',
                'rating' => '18',
                'created_at' => '2023-03-27 03:01:09',
                'updated_at' => '2023-03-28 21:48:01',
            ],
            [
                'id' => '70',
                'country_id' => '11',
                'slug' => 'ottawa-on',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Ottawa, ON',
                'address' => '100 Champagne Ave S #810, Ottawa, ON K1S 4P4',
                'description' => '1bd | 1ba | -- sqft

Underground Heated Parking And Same-Floor Locker Are Included! Location, Location! Soul Of Little Italy! Steps From Public Transit, Otrain And Bike Paths & Parks, Dows Lake, The Bistros & Restaurants Of Little Italy, Civic Hospital, Carleton University, Canada Agriculture Museum, Westgate Mall. Faces Loretta Ave (Very Quiet & Nice View) - 8th Floor. Nice View /
Abundance Of Natural Light. Locker (On The Same Floor)
& Bicycle Storage (Ground Floor) Included. 6 Stainless Appliances (Range, Dishwasher, Washer/Dryer, Fridge, Microwave). Many Upgrades (Pot-Lights, Frosted-Glass Doors, Large Built-In Storages Etc.). Leeds Certified Building Gives You Access To Over 10,000 Sq Ft Of Indoor And Outdoor Amenities Space: Fitness Room, Lounge, Outdoor Terrace/Bbq Area. Secure Access To The Building. Heat And Air-Conditioning - Included. Water - Included. Locker (The Same Floor) - Included. Bicycle Storage - Included. Guest Parking Is 
 Included. Hydro And Enbridge Is Extra.
Address: 100 Champagne Ave S #810, Ottawa, ON K1S 4P4
Type: Apartment
Cooling: Central
Heating: Forced Air
Pets: Contact manager
Parking: 1 Parking space 
Laundry: Contact manager
Deposit: Contact listing agent 
fees: Contact listing agent
Listed by: Oliver Baumeister 
Contact number: (213) 306-3558',
                'original_price' => '1450',
                'selling_price' => '1350',
                'trending' => '1',
                'status' => 'Rented',
                'rating' => '18',
                'created_at' => '2023-03-27 03:30:06',
                'updated_at' => '2023-04-03 20:17:39',
            ],
            [
                'id' => '71',
                'country_id' => '11',
                'slug' => 'ottawa-on',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Ottawa, ON',
                'address' => '360 McLeod St, Ottawa, ON K2P 1A9',
                'description' => '1bd | 1ba | 550 -- sqft

Modern 1 bed plus den downtown condo on the 8th floor boasts 10ft ceilings, floor to ceiling windows and an oversized balcony running the entire length of the unit: perfect for entertaining. Corner unit so only adjoining neighbours on 1 side. Amenities include salt water pool, two gyms, two party rooms with bbq patios and a movie theatre.

Located at Bank and McLeod, just steps away from the Museum of Nature, restaurants, grocery stores and shopping on Bank St, Elgin St, the Glebe and Lansdowne.

Heat and water included. Fast and affordable fibre internet available through FibreStream. Available as of June 1.

Date available: Thu Jun 1 2023
Type: Apartment
Cooling: Other
Heating: Contact manager
Pets: Cats, Dogs
Parking: Contact manager
Laundry: In Unit
Deposit & fees: Contact Property Owner

Listed by: Oliver Baumeister 
Contact number: (213) 306-3558',
                'original_price' => '1600',
                'selling_price' => '1500',
                'trending' => '1',
                'status' => 'On Rent',
                'rating' => '19',
                'created_at' => '2023-03-27 03:57:04',
                'updated_at' => '2023-03-28 21:53:51',
            ],
            [
                'id' => '72',
                'country_id' => '10',
                'slug' => 'miami-fl',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Miami, Florida',
                'address' => '16824 SW 137th Ave, Miami, FL 33177',
                'description' => '1bd | 1bath | -- 876 sqft

Luxury Living at Atlantico at Kendall!

Discover all that you need for a life of luxury and ease at Atlantico at Kendall. Throughout our community and within each of our 1 bedroom, 2 bedroom, and 3 bedroom apartments in Kendall, residents will find amazing amenities that are designed to enhance every lifestyle. In each home, residents will have exclusive access to unique features like gourmet kitchens with granite countertops and stainless steel appliances, a private patio, and expansive walk-in closets that provide an ample amount of storage space. Aside from our stunning interiors, the community at our Kendall apartments for rent is filled with amazing amenity spaces for residents to explore. Spend time outdoors at the resort-style swimming pool or at the gazebo and barbecue area, or head inside to the social living room and enjoy the coffee bar and lounge. There is even a fitness center where residents can stay active! Explore our luxury Miami apartments and discover all that awaits within our community. Come home to Atlantico at Kendall
Address - 16824 SW 137th Ave, Miami, FL 33177

Key features:

Pet-friendly
In-unit dryer, in-unit washer
Covered parking, other parking, parking lot, street parking, surface parking lot
Patio, playground

Building Amenities:
Community rooms
Club house
Conference room
Game room

Special features:
24hr. Emergency Maintenance
Cabana
Community gas grill/BBQ area
Cyber Cafe
Frameless glass shower

Policies:
Lease Terms
Available months 7, 8, 9, 10, 11, 12, 13, 14
$500 deposit fee

Deposit: Contact listing Agent

Listed by: Chris Braun 
Contact number: (802) 440-0800',
                'original_price' => '2500',
                'selling_price' => '2200',
                'trending' => '1',
                'status' => 'On Rent',
                'rating' => '21',
                'created_at' => '2023-03-27 04:24:24',
                'updated_at' => '2023-03-28 21:55:21',
            ],
            [
                'id' => '73',
                'country_id' => '11',
                'slug' => 'ottawa-on',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Ottawa, ON',
                'address' => '770 Brookfield Rd, # A820, Ottawa, ON K1V 6J4',
                'description' => 'Studio | 1ba | 322 sqft

Amenities:
- Gym (weight room, yoga room, cardio room, complimentary towels etc.)
- Shuttle Bus (to and from Carleton University as well as Walmart)
- Study Rooms in every floor + Library in the main floor
- Game Room ( ping pong tables, pool table, TVs, mini fridge and microwave, great for friends, etc. )
- Cleaning Service (once a month the room [not including the bathroom] will be cleaned for you which is included in your rent)
- Internet is included. Other utility bills are not included, however, they can range from about $20 - $60 depending on your usage.
- Great location ( Access to the park by the River that is a 3 min walk from the building, Billing\'s Bridge Mall and Carleton University are nearby, 15 min drive to Downtown Ottawa)
- Parking available (+ $50/month for outdoor, +$100/month for indoor parking)
- Security in the main lobby

Room Details (Fully Furnished):
- Dishwasher
- Washing machine and dryer
- Oven, stove and fridge
- Large smart TV
- Armchair
- Study Desk + Chair
- Side Table
- 1 double bed (storage available under it)
- Large closet to store clothes and other items with a mirror inside
- 1 full washroom
Address: 770 Brookfield Rd, # A820, Ottawa, ON K1V 6J4
Owner: Oliver Baumeister 
Contact number: Whatsapp (213) 306-3558',
                'original_price' => '1200',
                'selling_price' => '1100',
                'trending' => '1',
                'status' => 'On Rent',
                'rating' => '16',
                'created_at' => '2023-03-27 06:42:57',
                'updated_at' => '2023-03-29 04:54:27',
            ],
            [
                'id' => '74',
                'country_id' => '11',
                'slug' => '1-vermont-ave-21-toronto-on-m6g-1x6',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Toronto, ON',
                'address' => '1 Vermont Ave, # 21, Toronto, ON M6G 1X6',
                'description' => '1bd | 1ba | -- 700 sqft

Short Term Sublet: Available May 1 - October 31.

Spacious 1 bedroom apartment in quaint residential area, only 20mins from downtown. Close to lots of restaurants & bars, parks and two different subway lines.

Quiet corner unit with small Juliette balcony. The apartment features a large living room with a smart TV and office area. The bedroom has a medium firmness tempurpedic mattress and with bamboo sheets. The bathroom has all the basics and a tushy bidet. The kitchen has 4p eat in dining area and a touch faucet to make dishwashing easier. The space has sonos/ alexa dots throughout.

Includes internet, hydro and various TV subscriptions. Shared washer/ dryer in basement of building.

Available May 1 - October 31 with possibility of extending. First and last month\'s rent due upon confirmation of sublet, via e-mail transfer or paypal.

Feel free to reach out by whatsapp with any questions or to request more photos or respond to this ad.

Visits can be arranged the afternoon of March 19, upon request.

All utilities included in rent; internet, electricity, water, various streaming services.
Address - 1 Vermont Ave, # 21, Toronto, ON M6G 1X6
Listed by property owner: John 
Whatsapp (914) 436-3450',
                'original_price' => '2000',
                'selling_price' => '1800',
                'trending' => '1',
                'status' => 'Rented',
                'rating' => '9',
                'created_at' => '2023-03-28 04:07:17',
                'updated_at' => '2023-04-03 19:24:48',
            ],
        ]);

        DB::table('houses')->insert([
            [
                'id' => '75',
                'country_id' => '11',
                'slug' => 'toronto',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Toronto, ON',
                'address' => '28 Woodgrove Dr, Toronto, ON M1E 3J8',
                'description' => '1bd | 1ba | 

Spectacular, Bright, Large, Renovated West Hill Lower Unit Featuring Large Living/ Dining Room With Gas Fireplace, A Spacious Bedroom With Mirrored Double Closet, A Full Bathroom, Large Eat-In, High-End Kitchen & Ensuite Dedicated Laundry. Outdoors Space And Parking On The Driveway Are Included. 5 Min To 401, Close To The Ttc, Go Train, Shopping & More. Minutes To Waterfront Parks On The Lake That Are Perfect For Refreshing Strolls. Everything Is Done! Just Move In & Enjoy! 

Address: 28 Woodgrove Dr, Toronto, ON M1E 3J8

Listed by brokerage
RE/MAX REALTRON REALTY INC., BROKERAGE
More information: Contact property owner 
WhatsApp: ‪ (914) 436-3450',
                'original_price' => '1095',
                'selling_price' => '950',
                'trending' => '1',
                'status' => 'Rented',
                'rating' => '12',
                'created_at' => '2023-03-28 14:38:05',
                'updated_at' => '2023-04-03 19:25:33',
            ],
            [
                'id' => '76',
                'country_id' => '12',
                'slug' => 'miami-fl',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Miami, Florida',
                'address' => '4-4XX Northwest Ave #142, Miami, FL 33182',
                'description' => '| 0.4 Acres |

PROPERTY NEXT TO DEVELOPED RESIDENTIAL DISTRICT EAST OF SW 137 AVE. CORNER LOT SIZE =108.610 X 140. .40 AC VACANT LAND IN THE W MIAMI-DADE AREA WITH RESIDENTIAL DEVELOPMENTS NEARBY. IN PROXIMITY TO HIGHWAYS NW 137 AVE & SR-826 EXTENSION. FUTURE PLANS FOR AN SR-826 THE KENDALL PARKWAY HIGHWAY AREA TO PASS CLOSE TO THE LAND. PLATTED WITH FOLIO NUMBER!
Address: 4-4XX Northwest Ave #142, Miami, FL 33182

Listed by: Jose Garrido (914) 436-3450
One Stop Realty

Nathan Moonsor PA (917) 512-8973

One Stop Realty

Source: MIAMI, MLS#: A11013927
Originating MLS: A-Miami Association of REALTORS
Zillow last checked: 3 hours ago

Listing updated: Jan 22, 2023 at 02:07pm',
                'original_price' => '125000',
                'selling_price' => '115000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '17',
                'created_at' => '2023-03-29 03:45:42',
                'updated_at' => '2023-03-29 03:46:10',
            ],
            [
                'id' => '77',
                'country_id' => '12',
                'slug' => '563-nw-58th-st-miami-fl-33127',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Miami, Florida',
                'address' => '563 NW 58th St, Miami, FL 33127',
                'description' => '| 4,935.348 Square Feet |

Great opportunity to own this centrally located,  Zoned-Duplex residential corner lot in Buena Vista Gardens neighborhood.  *Buyer must do their own due diligence to verify information, confirm building requirements and/or restrictions.

Address: 563 NW 58th St, Miami, FL 33127

Listed by:
Martha Cutino (646) 363-6883

Source: MIAMI, MLS#: A11321184 
Originating MLS: A-Miami Association of REALTORS

Listing updated: February 16, 2023 at 09:33am',
                'original_price' => '170000',
                'selling_price' => '150000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '14',
                'created_at' => '2023-03-29 03:57:03',
                'updated_at' => '2023-03-29 03:57:49',
            ],
            [
                'id' => '78',
                'country_id' => '12',
                'slug' => 'miami-fl',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Miami, Florida',
                'address' => '18800 SW 197th Ave, Miami, FL 33187',
                'description' => 'Great Location with potential. Corner lot with 1.46 Acres in the Redlands. Lot is grandfathered so come a build the home of your dreams and more. Agriculturally producing trees with Well on sight and FPL connection close by.  **Buyer must independently verify all information and documentation.

Address: 18800 SW 197th Ave, Miami, FL 33187

Listed by: Karina Castillo (646) 979-0771

Vanaman Real Estate Investments, LLC

Source: MIAMI, MLS#: A11351558


Originating MLS: A-Miami Association of REALTORS

Listing updated: March 26, 2023 at 21:40pm',
                'original_price' => '360000',
                'selling_price' => '350000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '22',
                'created_at' => '2023-03-29 06:46:44',
                'updated_at' => '2023-03-29 06:49:02',
            ],
            [
                'id' => '79',
                'country_id' => '7',
                'slug' => 'california',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'California, United States',
                'address' => '19 Visitacion Ave, Brisbane, CA 94005',
                'description' => '3bd | 2ba | 1,100sqft |

Address: 19 Visitacion Ave, Brisbane, CA 94005

Welcome home to this newly re-modeled 3 bed 2 bath house right in the heart of Brisbane. It is equipped with a new gourmet kitchen, quartz tops, stainless steel appliances, custom tile backsplash, new hard flooring, new windows, central heating, recessed lights, laundry, master suite, walk-in closet, custom modern finishes throughout and more! On the outside, it is equipped with a 3 car driveway, secluded backyard, fruit trees, and gorgeous outdoor patio. It is a convenient 20 minute drive to downtown San Francisco and a 9 minute drive to San Francisco Airport. Close to public transportation, free shuttle, Brisbane swim, tennis, marina, hiking, biking, and walking distance to shopping.',
                'original_price' => '1111353',
                'selling_price' => '1101300',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '33',
                'created_at' => '2023-04-03 20:23:32',
                'updated_at' => '2023-04-03 20:24:41',
            ],
            [
                'id' => '80',
                'country_id' => '9',
                'slug' => 'cuffley-hertfordshire',
                'name' => 'Single-Family Home',
                'bed' => '3',
                'bath' => '4',
                'square' => '200',
                'state' => 'Hertfordshire, United Kingdom',
                'address' => 'Cuffley, Hertfordshire',
                'description' => 'This substantial 10-bedroom family home sits on a 2.8-acre plot and boasts many stunning features. 

The beautifully finished property has six reception rooms, plenty of living space, and leisure facilities, including a gym and a sauna. 

Could this be the home you\'ve been dreaming of? 

📍 How much? £6.95m 
📍 Where? Cuffley, Hertfordshire',
                'original_price' => '8053900',
                'selling_price' => '7980000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '28',
                'created_at' => '2023-04-03 21:37:50',
                'updated_at' => '2023-04-03 21:38:16',
            ],
            [
                'id' => '83',
                'country_id' => '15',
                'slug' => '356 feet',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'DE',
                'address' => '256 Chapman Road',
                'description' => 'AUTHENTIC Cap-Rock

Welcome on-board Caprock most luxurious collection of boutique river ships, graced with soft lines and rich tones of elegant French colonial design throughout carefully created spaces and generous suites with every modern convenience.',
                'original_price' => '1810000',
                'selling_price' => '1090000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2023-05-09 23:02:33',
                'updated_at' => '2023-05-09 23:02:33',
            ],
            [
                'id' => '84',
                'country_id' => '7',
                'slug' => 'rapid-city',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '3953 Fairway Hills Dr, Rapid City, SD 57702',
                'description' => 'Are you Looking for safe, relaxing & carefree living? Look no further than this must-see MAIN level condo. Located in beautiful SW Rapid City with views of trees & wildlife in a park setting with walking trails...pickleball courts...a community center, work out facility, fountains & a swimming pool. This well kept 2 bedroom 2 bath condo has so many updates...a washer/dryer in the condo, LED lighting, Stainless refrigerator, dishwasher, range & microwave, newer Kitchen countertops, sink, disposal, faucet, New doors, Carpet, New LVP flooring, Primary Bath updates that include a tile shower w/ glass door, new bath countertops & tile backsplash & wrap around mirrors. The bedrooms are spacious, the kitchen features an abundance of countertop space, painted cabinets, a pantry, an eat-at counter, upper & under cabinet lighting. The Dining room is open to large living room that is adjacent to the patio for easy access to the park. The underground garage includes 1 parking space near the elevator & extra storage. Amenities include a pool, playground, party house, quest lodging (for a minimal fee) pickleball court, a work out room & walking trails. The HOA includes water, garbage, community center & new workout area, building insurance, basic cable, pool, a building laundry room & common area maintenance. This home is easily assessable as a main level condo with no entry steps, and an elevator to the garage. This property is a desirable investment!',
                'original_price' => '305000',
                'selling_price' => '305000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '80',
                'created_at' => '2025-09-24 17:07:15',
                'updated_at' => '2025-09-24 17:08:41',
            ],
            [
                'id' => '85',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '4902 Stoney Brook Ct, Rapid City, SD 57702',
                'description' => 'Listed by Jeremy Kahler, KWBH,. Move in ready end-unit townhome in a quiet southwest Rapid City location! Nestled on a dead end street, this home offers 3 bedrooms, 2 bathrooms and a 1-car carport Smart main level layout has convenient entertaining space- the comfortable living room has an electric fireplace and vaulted ceilings, and the large kitchen has an eat in dining area and access to the back deck 2 bedrooms and 1 bathroom on the main level Main floor bathroom has been updated with a deep soaker tub/shower with tile surround Basement level is fully finished and adds a cozy family room, 1 bedroom (ntc for window size), 1 bathroom, a good size laundry room and a 11\'x17\' storage/bonus room Entertain with ease outside on the new maintenance free back deck with metal railings 1-car carport for off street parking, and an outdoor storage closet for convenienece Property backs to association owned land so no immediate neighbors behind. Located near local businesses and a few blocks from Corral Drive and Southwest Middle School. HOA is $160/mo and includes lawn mowing, snow removal, exterior maintenance, and garbage service. Home has a newer water heater, a new maintenance free deck, remodeled bathroom and a new roof is being installed by the HOA.',
                'original_price' => '257500',
                'selling_price' => '257500',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:12:11',
                'updated_at' => '2025-09-24 17:12:11',
            ],
            [
                'id' => '86',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '4208 Foothill Dr, Rapid City, SD 57702',
                'description' => 'Enjoy town-home living with the most spectacular views of the hills and city. This home has 2 bedrooms, 2 baths, and a 2-two car garage with workshop and plenty of storage. The open floor plan main level has a newly remodeled galley kitchen with new high-end stainless appliances and you\'re surely going to enjoy the large open living area that has patio doors to a 17x12 deck which you will salivate over the beautiful views of the Black Hills! The main level bathroom and both bedrooms have been renovated as well!! Of course, the walk-out lower level has been renovated with all new paint, flooring, and renovated bathroom, with large family room and features a wood burning stove which opens out to a private back yard patio. Finally the laundry area is conveniently located just off the garage.',
                'original_price' => '329000',
                'selling_price' => '329000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:24:26',
                'updated_at' => '2025-09-24 17:24:26',
            ],
            [
                'id' => '87',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '2934 Motherlode Dr, Rapid City, SD 57702',
                'description' => 'Beautiful home tucked within a desirable Southwest neighborhood and walking distance to Corral Drive Elementary/Southwest Middle School, restaurants, and Gym\'s. This property offers an open-concept Ranch style floor plan, 5 bedrooms, 3 bathrooms, a deep 3-cargarage, over 2800sf, Quartz countertops, stainless steel appliances, porcelain tile flooring, quality cabinets, Reverse Osmosis water system, 2 gas fireplaces, fully fenced backyard, composite back deck, sprinkler system, walkout basement w/ an impressive wet-bar, and a robust security system. The primary bedroom, 2 additional bedrooms, and laundry room are all located on main level. Basement offers2 more bedrooms, a bathroom, large family room set up for surround sound, and a spacious bar area for entertaining. Seller is a licensed broker in South Dakota. Call Listing Agent Dante Colicheski for a showing today!',
                'original_price' => '615000',
                'selling_price' => '615000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:27:18',
                'updated_at' => '2025-09-24 17:27:18',
            ],
            [
                'id' => '88',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '3964 Fairway Hills Dr, Rapid City, SD 57702',
                'description' => 'Welcome home to this immaculate 2-bedroom, 2-bathroom condo offers endless amenities for maintenance-free ease of living! Onsite features include heated parking garage, community room and space for entertaining, walking paths, pool & hot tub, outdoor playground and the well-secured building with controlled access. Enjoy an open spacious layout with tasteful updates - new flooring and contemporary lighting. The primary ensuite features wonderful natural light, double sink vanity and walk-in shower. Step out onto the covered balcony and enjoy views of the golf course, conveniently located close to shopping, dining and parks! The HOA includes water, garbage removal and building insurance. This condo truly delivers the perfect blend of luxury, convenience and community. This is an exceptional opportunity - don\'t wait, call today!',
                'original_price' => '214000',
                'selling_price' => '214000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:29:06',
                'updated_at' => '2025-09-24 17:29:06',
            ],
            [
                'id' => '89',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '4223 Foothill Dr, Rapid City, SD 57702',
                'description' => 'Looking for a townhome with a modern feel and panoramic views of the beautiful Black Hills!! If so this one is for you!! The townhome has 3 bedrooms, 3 full bathrooms, and a large 2 car garage with storage. This townhome is a custom design end unit with an open floor plan that you will really enjoy. The kitchen has stainless steel appliances, custom center island, custom cabinets with soft close doors and drawers, and a large walk-in pantry. Second bedroom/office is just off the great room. Enjoy the extra large primary suite with private bath, two closets one being a walk-in, you also have your own private patio off the primary suite where you will enjoy the privacy of nature. The lower level creates a warm and inviting atmosphere for relaxation, third bedroom, and third full bath. This unit will offer the new owners privacy, large windows and deck to enjoy the stunning views of the Black Hills, city lights, and serene nature',
                'original_price' => '395000',
                'selling_price' => '395000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:31:22',
                'updated_at' => '2025-09-24 17:31:22',
            ],
            [
                'id' => '90',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '2905 Harvard Ave, Rapid City, SD 57702',
                'description' => 'Listed by Rich Hegre Engel & Volkers Black Hills. 605-381 RICH(7424) Set on an impressive corner lot in southwest Rapid City, this elegant ranch-style home combines timeless design with a commanding presence. From the moment you arrive, the property stands out with its generous grounds and stately curb appeal. Inside, expansive living spaces flow seamlessly, with beautiful hard wood floors and is filled with natural light and designed for both comfort and sophistication. The kitchen features granite, new tile backsplash and stainless appliances. The oversized lot provides endless opportunities for outdoor living, entertaining, and creating your own private retreat. Perfectly positioned near parks, shopping, and the beauty of the Black Hills, this residence offers a rare blend of prestige, convenience, and enduring charm in one of Rapid Citys most sought-after neighborhoods.',
                'original_price' => '674900',
                'selling_price' => '674900',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:37:05',
                'updated_at' => '2025-09-24 17:37:05',
            ],
            [
                'id' => '91',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '3982 Fairway Hills Dr, Rapid City, SD 57702',
                'description' => 'THIS CONDO IS ON THE THIRD FLOOR!!! Located in the Park West Condominium building, with views of the hills. Easy access to the beautiful Black Hills and close to shopping, restaurants and parks. Maintenance free living with secured access to the building and heated parking garage. 2 bedrooms and 2 bathrooms within 1, 083 sq ft. New windows, paint, and updated carpeting throughout. Large living room, dining room and kitchen area. Spacious master bedroom with en suite, including double vanity and walk in shower. Extra storage within the condo along with an extra storage area in the garage. Some of the amenities on location include, walking paths, hot tub, pool and playground. Also included is a community room for family gatherings and parties. 2 suites are available if extra space is needed for guests',
                'original_price' => '219900',
                'selling_price' => '219900',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:44:15',
                'updated_at' => '2025-09-24 17:44:15',
            ],
            [
                'id' => '92',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '945 Enchantment Rd, Rapid City, SD 57701',
                'description' => 'This spacious and meticulously maintained home captures sweeping bluff and canyon views from the living room, dining area, kitchen, and master suitemust see to truly appreciate this setting! The kitchen features classy white soft-close cabinetry, granite countertops, and stainless steel appliances. The main living area offers hardwood floors, vaulted ceilings, a gas fireplace, and direct access to a 24\'16\' Trex deckperfect for entertaining or savoring breathtaking sunsets. The master suite includes a cozy gas fireplace, soaking tub, custom walk-in tile shower, large walk-in closet, and exceptional views. Downstairs, enjoy a large great room with a unique wet bar, custom stone entertainment center, full bathroom, and three additional bedrooms, including a 14\'20\' office/bedroom with a walk-in closet and stunning views. Walk out to a 33\'13\' patio, partially covered by the deck above. Mature evergreens, a manicured lawn, and a built-in sprinkler system create a lush outdoor retreat. Oversized 3-car garage with extra storage. Ideally locatedjust 5 minutes to shopping and groceries, 7 minutes to Monument Health, 10 minutes to multiple golf courses, 20 minutes to the airport, and 35 minutes to Pactola Reservoir for premier boating and fishing',
                'original_price' => '925000',
                'selling_price' => '925000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:49:51',
                'updated_at' => '2025-09-24 17:49:51',
            ],
            [
                'id' => '93',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '4051 Fairway Hills Dr, Rapid City, SD 57702',
                'description' => 'Beautiful 3rd-Floor Condo with Elevator & Heated Parking! Step into comfort and convenience with this spacious, light-filled condo featuring elevator access, heated underground parking, and easy, low-maintenance living. Large windows flood the home with natural light and offer peaceful views, while modern finishes throughout create a stylish and welcoming space. You\'ll love the quartz countertops, stainless steel appliances, walk-in shower, and in-unit laundrywasher and dryer included! 3rd floor be on the top of the world with no one above you. The HOA fee covers access to the pool and clubhouse, exterior insurance, both hot and cold water, trash service, snow removal, lawn care, and interior maintenance of common areasgiving you more time to enjoy the things you love. Nestled just off Sheridan Lake Road, you\'re close to everything yet tucked into a quiet, comfortable setting. Start living easyschedule your showing today!',
                'original_price' => '270000',
                'selling_price' => '270000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:51:43',
                'updated_at' => '2025-09-24 17:51:43',
            ],
            [
                'id' => '94',
                'country_id' => '7',
                'slug' => 'Rapid City',
                'name' => null,
                'bed' => null,
                'bath' => null,
                'square' => null,
                'state' => 'United State, Rapid City',
                'address' => '2150 Skyline Ranch Rd, Rapid City, SD 57701',
                'description' => 'Experience the pinnacle of Black Hills luxury living in this custom-built architectural masterpiece within city limits. A grand stone courtyard, stately portico, and custom oak entry door set the stage for what lies beyond. Inside, quarter-sawn white oak floors lead the way through meticulously crafted spaces, where every detailfrom leathered granite countertops to onyx flooring and custom tile inlaysexudes timeless elegance. At the heart of the home, the chefs kitchen blends function and beauty with professional-grade Wolf appliances, custom hardwood cabinetry, and expansive leathered granite countertops. A Brazilian cherry end-grain breakfast bar adds warmth and character. Whether enjoying casual meals in the informal dining area or hosting formal dinners beneath a chandelier in the window-lined dining room, this home is made for entertaining. Unwind in the music room, cozy up by the living room fireplace, or step into the screened porcha shaded retreat ideal for summer afternoons or watching storms roll in. The adjacent open-air deck offers a perfect spot for stargazing. The main-level master suite is a serene sanctuary, complete with plush carpet, a tray ceiling, and a spa-inspired en-suite featuring heated tile floors, dual vanities, a freestanding tub, and a custom walk-in shower. A boutique-style walk-in closet provides generous storage',
                'original_price' => '2700000',
                'selling_price' => '2700000',
                'trending' => '1',
                'status' => 'On Sale',
                'rating' => '3',
                'created_at' => '2025-09-24 17:53:22',
                'updated_at' => '2025-09-24 17:53:22',
            ],
        ]);
    }
}
