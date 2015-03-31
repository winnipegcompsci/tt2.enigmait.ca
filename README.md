TT2.0 Development Progress / TODO:
-------------------------------------------------------------------------------
User Interface:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
	Panel for Quotes
	Panel for Reports
	Panel for Currencies
	Panel for Competitors
	Panel for Data Providers    
	Assign Panels colour based on Dashboard Links. (Blue,  Green, Yellow, Red).
	
    TT:
    Tickets (Add View)
    Tickets (Edit View)
    Tickets (Index View)......................................................
    
    Projects (Add View)
    Projects (Edit View)
    Projects (Index View)
    
    Quotes (Add View)
    Quotes (Edit View)
    Quotes (Index View)
    
    WTCR:
	Orders (Add View)
    Orders (Index View, Find, Lookup)
    Orders (Edit View)
        
	'Notifications' - Header Element
		
	Fix / Center Paginated Numbers.
	Dashboard - Recent Orders Table (Last 10 Orders)
	'Sales by Marketplace' Donut Graph.       

-------------------------------------------------------------------------------    
Database:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
	Switch 'Sales Vehicles' for 'Marketplaces'. Build Marketplace Schema

-------------------------------------------------------------------------------    
Functionality::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
	Creating WTCR Product from Vendor Products
    Add WTCR Product to Inventory

	Fetching from Longtech          (Ajax Progressor)
	Fetching from ASI               (Ajax Progressor)
	Manually add AllWay Products    

    Drop All Old Products
    
	Generate ZPL Barcode for Inventory Tracking
	
	Push Product to Drupal (WTCR)
	Push Product to eBay (WTCR)
	Push Product to Amazon (WTCR)
	Push Product to  Kijiji (WTCR)

	Create Reports (Taxes, Ticket, Billing Status, Employee Report, Inventory)
    
	Event: Supplier Price Fetches              DAILY
	Event: Competitor Price Fetches            DAILY
	Event: UPDATE MARKETPLACE PRICES           DAILY
	Event: Crypto Currency Rate Updates        Every 4-6 Hours?
	
	2-Factor Authentication
    
    Send Emails on Event Add.
    Send Emails on Ticket Assign
    Send Emails on New Notification (pertaining to user ROLE).
        
-------------------------------------------------------------------------------        
WTCR2.0 Development::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
-------------------------------------------------------------------------------
Drupal 8
	Install
	Setup Commerce (Kickstart?)
	Find Responsive Theme
	Create Product Layout / Template
    Find Commerce Replacement Modules to Replace Outdated Ubercart Modules:
        UberCart (fullfillment):
            Canada Post Shipping.......... https://www.drupal.org/project/commerce_canadapost
            Flat Rate Shipping............ https://www.drupal.org/project/commerce_flat_rate
            UPS Shipping Rates............ https://www.drupal.org/project/commerce_ups
            
        Ubercart Payment:
            Bitcoin:...................... https://www.drupal.org/project/commerce_bitcoin
            Litecoin:..................... Will have to Custom Make Litecoin Module
            Peercoin:..................... Will have to Custom Make Peercoin Module
            Nubit:........................ Will have to Custom Make Nubit Module
        Paypal:........................... https://www.drupal.org/project/commerce_paypal 
            Amazon Payments............... https://marketplace.commerceguys.com/extensions/amazon/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Amazon
            Commerce Discount............. https://marketplace.commerceguys.com/extensions/commerce-discount/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Discount
            Commerce Coupon............... https://marketplace.commerceguys.com/extensions/commerce-coupon/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Coupon
            Commerce (Auction)............ https://marketplace.commerceguys.com/extensions/commerce-donate/overview?utm_source=dcorg&utm_medium=module_listing&utm_content=thumbnail&utm_campaign=Commerce%20Donate
            
        