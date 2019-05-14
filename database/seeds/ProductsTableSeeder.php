<?php

use App\Events\Inst;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        DB::table('products')->insert([
            'name'=>'HP Notebook 15-rb001ne',
            'ar_name'=>'اتش بى نوت بوك 15-rb001ne',
            'description'=>'rocessor: Processor family: AMD Dual-Core E-Series processor. AMD Dual-Core E2-9000e (1.5 GHz base frequency, up to 2 GHz burst frequency, 1 MB cache).​
            Memory: 4 GB DDR4-1866 SDRAM (1 x 4 GB).
            Hard disk capacity: Internal drive 500 GB 5400 rpm SATA.
            Graphics Card: Integrated: AMD Radeon R2 Graphics.​
            Display: 39.6 cm (15.6") diagonal HD SVA anti-glare WLED-backlit (1366 x 768).',
            'image'=>'images/hp.jpg',
            'price'=>943,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Dell Inspiron 15-3567 Laptop',
            'ar_name'=>'ديل انسبيرن 15-3567 Laptop',
            'description'=>'Brand: Dell
            Color: Black
            Item Height: 26 Millimeters
            Item Width: 38 Centimeters
            Screen Size: 15.6 Inches
            Maximum Display Resolution: 1366x768
            Weight: 3 Kg
            Product Dimensions : 26.1 x 38 x 2.6 cm
            Batteries: One AA battery required. (included)
            Item model number Inspiron 3567
            Processor: Intel Core i3-7020U Processor 3M Cache, 2.30 GHz, 7th Generation
            Numbers of Cores : 2',
            'image'=>'images/dell.jpg',
            'price'=>899,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Huawei P30 lite',
            'ar_name'=>'واوى ب30 لايت',
            'description'=>'Discover a new and better way to capture the world with the incredible Huawei P30 lite Dual-SIM Mobile Phone. It is crafted with outstanding attention to detail and is a delight to behold. This mobile phone sports 24MP plus 8MP plus 2MP ultra-wide angle rear camera and a 32MP front camera that takes beautiful pictures in any lighting conditions. It is driven by a powerful',
            'image'=>'images/Huawei.jpg',
            'price'=>800,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Apple iPhone X',
            'ar_name'=>'ابل ايفون اكس',
            'description'=>'
            20 % OFF
            15,298.69 EGP 
             19,050.00 EGP   - You Save 3,751.31 EGP
            All prices include VAT  Details
            FREE Shipping Details
            Color
            Grey  Silver
            Memory RAM
            3 GB
            Storage Capacity
            64 GB  256 GB
            Number Of SIM
            Single Sim
            Description:
            Apple iPhone X is fitted with the A11 Bionic chip. This iPhone X has the TrueDepth camera. The Apple iPhone X delivers incredible performance and cutting-edge functionality. It features a 12MP camera that lets you click stunning lifelike pictures. Powered by iOS 11 operating system, this silver iPhone enables you to enjoy innovative apps and functionality. The all new Face ID',
            'image'=>'images/iPhone.jpg',
            'price'=>546,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Samsung 55 Inch Smart TV ',
            'ar_name'=>'سامسونج 55 بوصه ',
            'description'=>'Brand: Samsung
            Color: black
            Model: UA55RU7100
            Type: Flat
            Size: 55 inch
            HDMI: 3
            USB: 2
            Built In Receiver: Yes
            Smart: Yes
            One Remote: Yes
            Resolution: 3,840 x 2,160
            Weight: 17.3 kg
            Dimensions(WxHxD): 123.86 x 71.42 x 5.87 cm
            AI Upscale: N/A
            Smart View: Yes',
            'image'=>'images/Samsungtv.jpg',
            'price'=>750,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Nikon COOLPIX B700',
            'ar_name'=>'كاميرا نيكون',
            'description'=>'You can get a staggering performance with impeccable results that is all wrapped up in the neat black, compact Nikon COOLPIX B700. This compact digital camera sports a black finish and is built around a 20 MP low light CMOS sensor that offers crisp, and vivid images even when the light around you isn\'t optimal. This Nikon Coolpix camera records videos in 4K UHD at resolutions ',
            'image'=>'images\Nikon.jpg',
            'price'=>500,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Remax bluetooth headset',
            'ar_name'=>'سماعه بلوتوث ريمكس',
            'description'=>'Remax Bluetooth Headset Bluetooth Model RB-T9 Bluetooth wireless headset is perfect for those looking to exercise listen to music driving up the phone to connect to two devices simultaneously Lightweight and durable to use Excellent noise cancellation technology makes voice is much clearer With HD Voice technology provides excellent sound quality and crystal clear sound clarity with buttons',
            'image'=>'images/Remax.jpg',
            'price'=>20,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'    Charge 3 Waterproof portable Bluetooth speaker',
            'ar_name'=>'مكبر صوت بلوتوث',
            'description'=>'JBL Charge 3 is the ultimate, high-powered portable Bluetooth speaker with powerful stereo sound and a power bank all in one package. The Charge 3 takes the party everywhere, poolside or in the rain, thanks to the waterproof design, durable fabric and rugged housing. Its high-capacity 6,000mAh battery provides 20 hours of playtime and can charge your smartphones and tablets via its USB',
            'image'=>'images/JBL.jpg',
            'price'=>400,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'SanDisk Cruzer Force 16GB USB 2.0 Flash Drive',
            'ar_name'=>'فلاش ساندسك 16 ج',
            'description'=>'With the Cruzer Force USB flash drive, you\'ll get large storage capacities within a distinctive, stylish design. This USB flash drive features a durable metal casing that provides a dash of style. This secure, reliable flash drive can store even large files, including high-resolution images and HD video. It comes with SanDisk SecureAccess software, which makes it easy to create an',
            'image'=>'images\SanDisk.jpg',
            'price'=>20,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Hp Laserjet Pro M102W Wireless Printer',
            'ar_name'=>'طابعه ليزر وايرلس',
            'description'=>'Feature

            Photo Printer No
            Duty Cycle: Up to 10,000
            Ink
            
            Compatible Cartridges HP 17A (CF217A), HP 19A (CF219A)
            Number of Cartridges Included1
            Memory
            
            Internal Memory Yes
            Memory Card Slot No
            Performance
            
            ISO Mono Print Speed 23 pages per minute
            Print (Black/Monochromatic) Speed 23 pages per minute
            Printer Resolution (Black) Up to 1200
            Output Tray Capacity 100
            Recommended Monthly Volume 150 to',
            'image'=>'images/Laserjet.jpg',
            'price'=>524,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Carrier 53KHCT-12 Optimax Cooling Only Split Air Conditioner',
            'ar_name'=>'تكييف كايرير',
            'description'=>'Unit Ability: 1.5hp
            Unit Type: Cooling Only
            81.2W x 30H x 19.2D cm
            Area can be covered in square meter: From 8 To 15',
            'image'=>'images/Carrier.jpg',
            'price'=>200,
            'user_id'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Kiriazi E470 NV/2 No Frost Refrigerator',
            'ar_name'=>'ثلاجه كريازى',
            'description'=>'Total capacity of 450 liters
            Freezer capacity of 98 liters
            Higher efficiency and less consumption of electricity (B)
            Cooling the freezer
            Automatic removal of odors
            Refrigerator factory of the body sheet and processor chemically against rust accordance with international standards
            Shelves adjustable heights
            Shelves made of glass material against breakage
            Remember drawer Baala meat',
            'image'=>'images/Kiriazi.jpg',
            'price'=>524,
            'user_id'=>2
        ]);

        
    }
}
