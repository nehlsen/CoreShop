<?php

namespace CoreShop\Bundle\AdminBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class CoreShopAdminBundle extends AbstractPimcoreBundle
{
    /**
     * @return array
     */
    public function getCssPaths()
    {
        return [
            '/bundles/coreshopadmin/css/coreshop.css',
        ];
    }

    /**
     * @return array
     */
    public function getJsPaths()
    {
        return [
            '/bundles/coreshopadmin/js/startup.js',
            '/bundles/coreshopadmin/js/coreshop/plugin/broker.js',
            '/bundles/coreshopadmin/js/coreshop/plugin/plugin.js',
            '/bundles/coreshopadmin/js/coreshop/helper.js',
            '/bundles/coreshopadmin/js/coreshop/global.js',
            '/bundles/coreshopadmin/js/coreshop/settings.js',
            '/bundles/coreshopadmin/js/coreshop/update.js',
            '/bundles/coreshopadmin/js/coreshop/abstract/panel.js',
            '/bundles/coreshopadmin/js/coreshop/abstract/item.js',
            '/bundles/coreshopadmin/js/coreshop/currencies/panel.js',
            '/bundles/coreshopadmin/js/coreshop/currencies/item.js',
            '/bundles/coreshopadmin/js/coreshop/countries/panel.js',
            '/bundles/coreshopadmin/js/coreshop/countries/item.js',
            '/bundles/coreshopadmin/js/coreshop/zones/panel.js',
            '/bundles/coreshopadmin/js/coreshop/zones/item.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/multiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/select.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/data.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/select.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/dataMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopCountryMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopCountryMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopCountry.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopCountry.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopCarrier.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopCarrier.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopCarrierMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopCarrierMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopPriceRule.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopPriceRule.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopCurrencyMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopCurrencyMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopCurrency.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopCurrency.js',
            '/bundles/coreshopadmin/js/coreshop/rules/panel.js',
            '/bundles/coreshopadmin/js/coreshop/rules/item.js',
            '/bundles/coreshopadmin/js/coreshop/rules/action.js',
            '/bundles/coreshopadmin/js/coreshop/rules/condition.js',
            '/bundles/coreshopadmin/js/coreshop/rules/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/rules/actions/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/amount.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/weight.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/quantity.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/categories.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/countries.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/conditions.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/customers.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/customerGroups.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/carriers.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/products.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/timeSpan.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/totalPerCustomer.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/zones.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/currencies.js',
            '/bundles/coreshopadmin/js/coreshop/rules/actions/freeShipping.js',
            '/bundles/coreshopadmin/js/coreshop/rules/actions/discountAmount.js',
            '/bundles/coreshopadmin/js/coreshop/rules/actions/discountPercent.js',
            '/bundles/coreshopadmin/js/coreshop/rules/actions/gift.js',
            '/bundles/coreshopadmin/js/coreshop/pricerules/panel.js',
            '/bundles/coreshopadmin/js/coreshop/pricerules/item.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/panel.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/item.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopOrderState.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopOrderState.js',
            '/bundles/coreshopadmin/js/coreshop/broker.js',
            '/bundles/coreshopadmin/js/coreshop/install/install.js',
            '/bundles/coreshopadmin/js/coreshop/taxes/panel.js',
            '/bundles/coreshopadmin/js/coreshop/taxes/item.js',
            '/bundles/coreshopadmin/js/coreshop/taxrulegroups/panel.js',
            '/bundles/coreshopadmin/js/coreshop/taxrulegroups/item.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopTaxRuleGroup.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopTaxRuleGroup.js',
            '/bundles/coreshopadmin/js/coreshop/layout/portlets/ordersAndCartsFromLastDays.js',
            '/bundles/coreshopadmin/js/coreshop/layout/portlets/salesFromLastDays.js',
            '/bundles/coreshopadmin/js/coreshop/object/objectMultihref.js',
            '/bundles/coreshopadmin/js/coreshop/object/elementHref.js',
            '/bundles/coreshopadmin/js/coreshop/object/variantGenerator.js',
            '/bundles/coreshopadmin/js/coreshop/product/specificprice/actions/newPrice.js',
            '/bundles/coreshopadmin/js/coreshop/orders/grid.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/item.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/panel.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/fields.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/objecttype/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/type/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/type/elasticsearch.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/getters/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/getters/brick.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/getters/fieldcollection.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/getters/localizedfield.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/getters/classificationstore.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/interpreters/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/indexes/interpreters/objectproperty.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/item.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/panel.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/condition.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/conditions/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/conditions/select.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/conditions/multiselect.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/conditions/boolean.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/conditions/combined.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/conditions/range.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/similarity.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/similarities/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/product/filters/similarities/field.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopFilter.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopFilter.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopLanguage.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopLanguage.js',
            '/bundles/coreshopadmin/js/coreshop/orders/createPayment.js',
            '/bundles/coreshopadmin/js/coreshop/report/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/sales.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/carts.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/cartsAbandoned.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/products.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/categories.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/customers.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/quantities.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/carriers.js',
            '/bundles/coreshopadmin/js/coreshop/report/reports/payments.js',
            '/bundles/coreshopadmin/js/coreshop/report/monitoring/abstract.js',
            '/bundles/coreshopadmin/js/coreshop/report/monitoring/reports/emptyCategories.js',
            '/bundles/coreshopadmin/js/coreshop/report/monitoring/reports/disabledProducts.js',
            '/bundles/coreshopadmin/js/coreshop/states/panel.js',
            '/bundles/coreshopadmin/js/coreshop/states/item.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopState.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopState.js',
            '/bundles/coreshopadmin/js/coreshop/report/monitoring/reports/outOfStockProducts.js',
            '/bundles/coreshopadmin/js/coreshop/product/grid.js',
            '/bundles/coreshopadmin/js/coreshop/messaging/panel.js',
            '/bundles/coreshopadmin/js/coreshop/messaging/contact/panel.js',
            '/bundles/coreshopadmin/js/coreshop/messaging/contact/item.js',
            '/bundles/coreshopadmin/js/coreshop/messaging/threadstate/panel.js',
            '/bundles/coreshopadmin/js/coreshop/messaging/threadstate/item.js',
            '/bundles/coreshopadmin/js/coreshop/messaging/thread/panel.js',
            '/bundles/coreshopadmin/js/coreshop/messaging/thread/item.js',
            '/bundles/coreshopadmin/js/coreshop/orders/message.js',
            '/bundles/coreshopadmin/js/coreshop/orders/order.js',
            '/bundles/coreshopadmin/js/coreshop/orders/create/order.js',
            '/bundles/coreshopadmin/js/coreshop/product/pricerule/panel.js',
            '/bundles/coreshopadmin/js/coreshop/product/pricerule/item.js',
            '/bundles/coreshopadmin/js/coreshop/orders/address.js',
            '/bundles/coreshopadmin/js/coreshop/stores/panel.js',
            '/bundles/coreshopadmin/js/coreshop/stores/item.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopShop.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopStore.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopStoreMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopShopMultiselect.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/shops.js',
            '/bundles/coreshopadmin/js/coreshop/rules/conditions/personas.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/panel.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/item.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/action.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/condition.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/actions/additionAmount.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/actions/additionPercent.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/actions/discountAmount.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/actions/discountPercent.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/actions/fixedPrice.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/actions/shippingRule.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/shippingRule.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/conditions.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/countries.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/amount.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/weight.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/zones.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/dimension.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/postcodes.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/products.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/categories.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/customerGroups.js',
            '/bundles/coreshopadmin/js/coreshop/carriers/shippingrules/conditions/currencies.js',
            '/bundles/coreshopadmin/js/coreshop/object/tags/coreShopSpecificPrices.js',
            '/bundles/coreshopadmin/js/coreshop/object/classes/data/coreShopSpecificPrices.js',
            '/bundles/coreshopadmin/js/coreshop/product/specificprice/object/item.js',
            '/bundles/coreshopadmin/js/coreshop/orders/invoice/render.js',
            '/bundles/coreshopadmin/js/coreshop/orders/shipment/render.js',
            '/bundles/coreshopadmin/js/coreshop/orders/invoice.js',
            '/bundles/coreshopadmin/js/coreshop/orders/shipment.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/panel.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/item.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/action.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/condition.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/order/payment.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/order/orderState.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/order/carriers.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/invoice/invoiceState.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/shipment/shipmentState.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/user/userType.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/messaging/messageType.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/actions/mail.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/actions/orderMail.js',
            '/bundles/coreshopadmin/js/coreshop/mail/rules/conditions/payment/paymentState.js',
        ];
    }
}
