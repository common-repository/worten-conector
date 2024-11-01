=== Worten Conector ===
Author URI: https://teracondition.pt
Plugin URI: https://mirakl.teracondition.pt
Donate link: 
Contributors: teracondition
Tags: worten, worten marketplace, worten conector, mirakl
Requires at least: 5.3
Tested up to: 6.6.1
Requires PHP: 7.0 or higher
Stable tag: 2.5
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Catalog and orders integration between your Woocommerce Store and Worten Marketplace

== Description ==

Worten Official Partner

7 days Trial available.

Mirakl Connector was developed so that you can keep your catalog, orders and shipping information always up to date with Marketplace Worten for Portugal and Spain, freeing up time managing both catalogues.

So, with this solution, all your work is now carried out by our system in an automated way.

The process is carried out by an intermediate cloud solution, which allows communication between your online store and the Worten Marketplace in a faster and safer way, using few resources on your server.

Note: For updating Offers (prices, stocks, preparation times) the process is automated from activation. For the creation of Products, the integration is performed for each store individually.

Distinction between Products and Offers

A product is unique and has the EAN as an identifier on the Marketplace. A product is only uploaded once to the Marketplace database, so if it already exists, it will be considered an Offer. A product is what is visible on Marketplace and offers what each store offers. Let us then consider a category tree, where a Product is the "main category" and the Offers its "subcategories", where each Store presents its price, stock, VAT, preparation times, etc.

An Offer concerns the information regarding price, stock, VAT, return policy, etc., where each store has for each Product. Example: A TV from Brand X can be sold by several Stores, where each one will have its prices, stocks, VAT, processing times, available in the Marketplace catalogue.

As mentioned, Marketplace uses EAN as an identifier, so you must pay attention that only products from your store with EAN can be integrated. Woocommerce does not have an EAN field by association, so you can use the SKU field to insert the EAN, or use this plugin "EAN, UPC, ISBN Generator: Product Barcode Inventory for WooCommerce". If you have any questions, you can contact us. There is the possibility of generating EANs, namely for products with their own manufacture, however the recommendation is to use the EANs of the manufacturers.

Integration Operation (Products)
- Import of products from your store
- Synchronization of your products with Marketplace
- Products that already exist in the Marketplace database are considered offers with immediate synchronization, for prices, stocks, VAT, preparation times, etc
- Identification of Products that do not exist in the Marketplace database
- Personalized treatment for each store, taking into account the mandatory categories and attributes
- Submitting Products to the Marketplace
- Analysis and monitoring of the process
- Finalization and further processing as Offers

Integration Operation (Offers)
- Import of products from your store
- Synchronization of all offers for existing products on Marketplace
- Update of Offers for prices, stocks, VAT, preparation times, etc
- Define timelines and delivery
- Establishes overall and/or category-specific margins
- Process monitoring

Order Integration
This is an additional module, which can be subscribed in the Mirakl Connector backoffice and has the functionality of inserting orders placed on Marketplace in your store, being able to confirm or cancel an order in your store's backoffice, centralizing all your processes.

How it works? (Orders)
- Customer places an order on Marketplace
- Order is placed in your store, as if it were a purchase in your store
- Defines the states in your store's backoffice, reflected in the Marketplace's backoffice
- Choose the carrier and add shipping tracking, complete the order
- Stocks are updated
* at the moment the order module is only available for Woocommerce

Technology
- Amazon Web Services (AWS)
- Secure Cloud Infrastructure
- SQL Server Database
- .NET Core

== Instalation ==

1. Go to `Plugins` in Admin menu
2. Click `Add new`
3. Search for `Worten Conector` and click `Install now` or click in button `upload` to install `worten-conector.zip`
4. Click in `Activate Plugin`

== Changelog ==
= 2.5: 2024-05-28
* Version compatible with Wordpress 6.5.3
* Add margins by categories

= 2.4: 2023-11-20
* Version compatible with Wordpress 6.4.1

= 2.3: 2023-10-20
* Version compatible with Wordpress 6.3.2

= 2.2: 2023-10-10
* Update version for Wordpress 6.3.1

= 2.0: 2023-02-03
* Order fulfillment and shipping management implementation

= 1.0.1: 2022-25-05 =
* Birthday of Worten Conector