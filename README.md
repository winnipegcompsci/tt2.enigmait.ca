TT2.0 Development Progress / TODO:
-------------------------------------------------------------------------------    
Database:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
	Switch 'Sales Vehicles' for 'Marketplaces'. Build Marketplace Schema

-------------------------------------------------------------------------------    
Functionality::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
    Adding Item to Inventory
        Adds Details from Vendors Table to WTCR Products Table
            (SKU Lookup on SKU Map)
          
        IF HAS WTCR-SKU IN MAP => USE IT
        ELSE =? Generate New WTCR SKU
    
    Fetching from Longtech          (Ajax Progressor)
	Fetching from ASI               (Ajax Progressor)
	Manually add AllWay Products    (Add Form that does Lookup against Map)    
    
    Receive Products (WTCR Product => Inventory)
        Pushes WTCR Vendor Product to WTCR_Product.
            Gets Serial Numbers, Unique Instance Information, 
            (Comments: scratched) -> Saves to Inventory.
    
    Find Product Details
        Scan Barcode attached to item to lookup data about that particular
        product. 
        eg) Date Received, Date Sold, Price Received, Price Sold,Order #, 
       
	Generate ZPL Barcode for Inventory Tracking
        Barcode Gets Displayed in Inventory View along with link to print?
	
	Push Product to Drupal (WTCR)
	Push Product to Amazon (WTCR)
	Push Product to eBay (WTCR)
	Push Product to Kijiji (WTCR)

	Create Reports (Taxes, Ticket, Billing Status, Employee Report, Inventory)
        Supplier Price Fetches                  DAILY
        Event: Crypto Currency Rate Updates     Every 4-6 Hours?
        Competitor Price Fetches                DAILY
        Event: UPDATE MARKETPLACE PRICES        DAILY
        
	
	2-Factor Authentication
    
    Send Emails on Event Add.
    Send Emails on Ticket Assign
    Send Emails on New Notification (pertaining to user ROLE).
        
-------------------------------------------------------------------------------
User Interface:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
	User Profile View
        Secret Key
        Change Password    
    
    Panel for Quotes
	Panel for Reports
	Panel for Currencies
	Panel for Competitors
	Panel for Data Providers    
	
    TT:
    Tickets (Add View)
    Tickets (Edit View)
    Tickets (Index View)......................................................
    
    Projects (Add View)
    Projects (Edit View)
    Projects (Index View)
    
    Quotes: Schema
    Quotes (Add View)
    Quotes (Edit View)
    Quotes (Index View)
    
    WTCR:
	Orders (Add View)
    Orders (Index View, Find, Lookup)
    Orders (Edit View)
        
	'Notifications' - Header Element

    
    Fix / Center Paginated Numbers.
	Dashboard - Recent Orders Table (10 Orders)
	'Sales by Marketplace' Donut Graph.      
        
-------------------------------------------------------------------------------        
WTCR2.0 Development::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
Install Drupal 8.0 (Acquia Dev Desktop)
Find Good Responsive Theme
Create Commerce Product Layout / Template
Find Commerce Replacement Modules to Replace Outdated Ubercart Modules:
    Canada Post Shipping.......... https://www.drupal.org/project/commerce_canadapost
    Flat Rate Shipping............ https://www.drupal.org/project/commerce_flat_rate
    UPS Shipping Rates............ https://www.drupal.org/project/commerce_ups
    
    Bitcoin:...................... https://www.drupal.org/project/commerce_bitcoin
    Litecoin:..................... Will have to Custom Make Litecoin Module
    Peercoin:..................... Will have to Custom Make Peercoin Module
    Nubit:........................ Will have to Custom Make Nubit Module
    
    Paypal:........................... https://www.drupal.org/project/commerce_paypal 
    Amazon Payments............... https://marketplace.commerceguys.com/extensions/amazon/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Amazon
    Commerce Discount............. https://marketplace.commerceguys.com/extensions/commerce-discount/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Discount
    Commerce Coupon............... https://marketplace.commerceguys.com/extensions/commerce-coupon/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Coupon
    Commerce (Auction)............ https://marketplace.commerceguys.com/extensions/commerce-donate/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Donate
            
        