# AssetPriceHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_created** | **\DateTime** | Optional. | [optional]
**last_updated** | **\DateTime** | Optional. | [optional]
**aph_id** | **string** | Unique identifier. | [optional]
**asset_id** | **string** | FK to assets. NULL when this record belongs to an endpoint. | [optional]
**endpoint_id** | **string** | FK to endpoints. NULL when this record belongs to an asset. | [optional]
**price_usd** | **float** | Optional. | [optional]
**date_ended** | **\DateTime** | SCD Type 2 — when this price record was superseded | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
