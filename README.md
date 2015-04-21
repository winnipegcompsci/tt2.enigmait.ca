Functionality:
-------------------------------------------------------------------------------    
Find Product Details...........................................................
-Scan Barcode attached to item to lookup data about that particular item
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
Push Product to Drupal (WTCR)

Push Product to Amazon (WTCR)
    API - Sign up and get API Key.

Push Product to eBay (WTCR)
    Look into API.

Push Product to Kijiji (WTCR)

TT / WTCR Reports..............................................................
(WTCR) Taxes
(WTCR) Sales (volume, by marketplace)
(Enigma) Ticket Reports
(Enigma) Billing Reports
(Enigma) Employee Report

Cron Jobs......................................................................
- Supplier Price Fetches                        DAILY
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

User Profile...................................................................
Profile View
Generate New Secret Key // Display QR Code.
Change Password (Hash pw before Save)

Panels.........................................................................
Panel for Quotes
Panel for Reports

Tickets........................................................................
Tickets (Add View)
Tickets (Edit View)
Tickets (Index View)
Tickets (View View)

Projects.......................................................................
Projects (Add View)
Projects (Edit View)
Projects (Index View)
Projects (View View)

Quotes.........................................................................
Quotes (Add View)
Quotes (Edit View)
Quotes (Index View)
Quotes (View View)

WTCR...........................................................................
Orders (Add View)
Orders (Index View, Find, Lookup)
Orders (Edit View)
    
'Notifications' - Header Element...............................................
- New Product Notifications
- New Order Notifications
- New Message Notifications
    
Fix / Center Paginated Numbers.................................................
- Setup Pagination Classes in Baked UI Template?

Dashboard......................................................................
- Last 10 Orders Table
- Sales by Marketplace Graph
- Add Other Info to Dashboard?
   
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