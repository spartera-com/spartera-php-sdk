# # AssetsInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** |  | [optional]
**company_id** | **string** |  |
**connection_id** | **string** |  | [optional]
**industry_id** | **int** |  | [optional]
**approval_status** | **string** | Approval status for AI-generated assets | [optional]
**approved_by_user_id** | **string** | User who approved this asset for marketplace | [optional]
**approved_at** | **\DateTime** | When this asset was approved for marketplace | [optional]
**name** | **string** |  |
**slug** | **string** |  | [optional]
**description** | **string** |  | [optional]
**source** | **string** | Enum type: Source |
**asset_type** | **string** | Enum type: AssetType | [optional]
**asset_schema** | **object** | Stores database table schema data including columns, types, and metadata | [optional]
**tags** | **string** |  | [optional]
**sql_logic** | **string** |  | [optional]
**source_schema_name** | **string** |  | [optional]
**source_table_name** | **string** |  | [optional]
**sell_in_marketplace** | **bool** |  | [optional]
**viz_chart_library** | **string** | Enum type: PlottingLibrary | [optional]
**viz_chart_type** | **string** | Enum type: ChartType | [optional]
**viz_dep_var_col_name** | **string** |  | [optional]
**viz_indep_var_col_name** | **string** |  | [optional]
**viz_size_col_name** | **string** |  | [optional]
**viz_color_col_name** | **string** |  | [optional]
**viz_data_aggregation** | **string** | Enum type: AggregationType | [optional]
**viz_sort_direction** | **string** | Enum type: SortDirection | [optional]
**viz_data_limit** | **int** |  | [optional]
**viz_color_scheme** | **string** | Enum type: ColorScheme | [optional]
**allow_params** | **bool** |  | [optional]
**accept_terms** | **bool** |  | [optional]
**cached** | **bool** |  | [optional]
**schedule** | **string** |  | [optional]
**next_run** | **\DateTime** |  | [optional]
**data_time_period_start** | **\DateTime** | Start date of the data time period covered | [optional]
**data_time_period_end** | **\DateTime** | End date of the data time period covered | [optional]
**geographic_coverage_type** | **string** | Type of geographic coverage (Enum type: GeographicCoverage) | [optional]
**geographic_coverage_details** | **string** | Specific regions/countries covered (e.g., &#39;United States, Canada, Mexico&#39;) | [optional]
**data_source_refresh_frequency** | **string** | How often the source data is refreshed (Enum type: DataRefreshFrequency) | [optional]
**data_source_last_refreshed** | **\DateTime** | When the source data was last refreshed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
