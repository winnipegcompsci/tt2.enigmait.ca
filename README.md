Functionality:
-------------------------------------------------------------------------------    
Find Product Details...........................................................
    -Scan Barcode attached to item to lookup data about that particular item
    eg) Date Received, Date Sold, Price Received, Price Sold,Order #, 

ZPL Barcodes for Inventory Tracking:::        
    - Generate ZPL Barcode for Inventory Tracking:
    - Barcode Can Ber Scanned to bring Up Inventory Details 
    - Filter on Inventory Page? or default to Steinbach search?

    eg) Date Received, Date Sold, Price Received, price sold for items of 
    future contract nature.
	
- Pushing WTCR Products to Marketplaces........................................
    Push Product to Drupal (WTCR)
        Create API from Services Module
        Write Drupal Code somwhere in the portables there is a new printer.
    Push Product to Amazon (WTCR)
        API - Sign up and get API Key.
    Push Product to eBay (WTCR)
        Look Into eBay API?
    Push Product to Kijiji (WTCR)
        Look Into Kijiji API?
   
TT / WTCR Reports..............................................................
    (WTCR) Taxes
    (WTCR) Sales (volume, by marketplace)
    (Enigma) Ticket Reports
    (Enigma) Billing Reports
    (Enigma) Employee Report

Cron Jobs......................................................................
    - Vendor Price Fetches                          DAILY
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

Dashboard......................................................................
- Last 10 Orders Table
- Sales by Marketplace Graph
   
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