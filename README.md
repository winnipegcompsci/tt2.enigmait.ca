Functionality:
-------------------------------------------------------------------------------    
    
    
Receive Products...............................................................
- (WTCR Product Gets Used to Create an Inventory Item Entity)
- Creates Inventory Item from WTCR Product + Vendor Product Info.
    -Gets Serial Numbers, Unique Instance Information, 

Find Product Details.........................................................
    -Scan Barcode attached to item to lookup data about that particular
    inventory item
    eg) Date Received, Date Sold, Price Received, Price Sold,Order #, 
       
Inventory Item View Page.......................................................
Generate ZPL Barcode for Inventory Tracking:
- Gets Displayed in Inventory 'view' view along with link to print label.
- Barcode Can Ber Scanned to bring Up Inventory Details
    eg) Date Received, Date Sold, Price Received, price sold, order #.

Vendor Products................................................................
-Implement Auto Fetch from EPROM		        (Cron Call - No Interface)
-Implement Auto Fetch from Longtech			    (Cron Call - No Interface)
-Implement Auto Fetch from ASI 				    (Cron Call - No Interface)
	
- Pushing WTCR Products to Marketplaces........................................
- Push Product to Drupal (WTCR)
- Push Product to Amazon (WTCR)
- Push Product to eBay (WTCR)
- Push Product to Kijiji (WTCR)

TT / WTCR Reports..............................................................
    (WTCR) Taxes
    (WTCR) Sales (volume, by marketplace)
    (Enigma) Ticket Reports
    (Enigma) Billing Reports
    (Enigma) Employee Report

Cron Jobs......................................................................
- Supplier Price Fetches                        DAILY
- Event: Crypto Currency Rate Updates           Every 4-6 Hours?
- Competitor Price Fetches                      DAILY
- Event: UPDATE MARKETPLACE PRICES              DAILY
        
2-Factor Authentication........................................................
- Implement Secret Key Column
- Display QR Code to Add to Client. 

Order Information Lookup.......................................................
- Fetch from Remote Drupal Table?- 

Email Notifications............................................................
    - Email on Ticket Assign / Status Change / Event Add
    - Email on New Vendor Product. 
    - Email Price Change Alerts. 
        
        
-------------------------------------------------------------------------------
User Interface
-------------------------------------------------------------------------------
	Right Hand Menus -> Port to Cog Button in Panel Header.
	
	User Profile View
        Secret Key.............................................................
        QR Code................................................................
        Change Password........................................................
    
    Panel for Quotes...........................................................
	Panel for Reports..........................................................
	Panel for Currencies.......................................................
	Panel for Competitors......................................................
	Panel for Data Providers...................................................
	
    Tickets (Add View).........................................................
    Tickets (Edit View)........................................................
    Tickets (Index View).......................................................
    
    Projects (Add View)........................................................
    Projects (Edit View).......................................................
    Projects (Index View)......................................................
    
    Quotes: Schema.............................................................
    Quotes (Add View)..........................................................
    Quotes (Edit View).........................................................
    Quotes (Index View)........................................................
    
    WTCR:
	Orders (Add View)..........................................................
    Orders (Index View, Find, Lookup)..........................................
    Orders (Edit View).........................................................
        
	'Notifications' - Header Element...........................................	
    
    Fix / Center Paginated Numbers.............................................
	Dashboard - Recent Orders Table (10 Orders)................................
	'Sales by Marketplace' Donut Graph......................................... 

    
    
-------------------------------------------------------------------------------      
WTCR2.0 Development
-------------------------------------------------------------------------------
Install Drupal 8.0 (Acquia Dev Desktop)
Find Good Responsive Theme

Create Commerce Product Layout / Template
Find Commerce Replacement Modules to Replace Outdated Ubercart Modules:
Canada Post Shipping.......... 
https://www.drupal.org/project/commerce_canadapost
Flat Rate Shipping............ 
https://www.drupal.org/project/commerce_flat_rate
UPS Shipping Rates............ 
https://www.drupal.org/project/commerce_ups

Bitcoin:...................... 
https://www.drupal.org/project/commerce_bitcoin
Litecoin:..................... 
Will have to Custom Make Litecoin Module
Peercoin:..................... 
Will have to Custom Make Peercoin Module
Nubit:........................ 
Will have to Custom Make Nubit Module

Paypal:........................... 
https://www.drupal.org/project/commerce_paypal 
Amazon Payments............... 
https://marketplace.commerceguys.com/extensions/amazon/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Amazon
Commerce Discount............. 
https://marketplace.commerceguys.com/extensions/commerce-discount/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Discount
Commerce Coupon............... 
https://marketplace.commerceguys.com/extensions/commerce-coupon/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Coupon
Commerce (Auction)............
https://marketplace.commerceguys.com/extensions/commerce-donate/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Donate