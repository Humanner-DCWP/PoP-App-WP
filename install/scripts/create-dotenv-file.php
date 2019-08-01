<?php
/**
 * Create the .env configuration files with default values for DEV/PROD environments
 */
$lines = []; 
if ('$ENV' === 'PROD') {
    $lines = [
        'USE_APPSHELL' => false, 
        'DISABLE_SERVICE_WORKERS' => false, 
        'USE_PROGRESSIVE_BOOTING' => true, 
        'USE_CODE_SPLITTING' => true, 
        'GENERATE_CODE_SPLITTING_FILES' => false, 
        'GENERATE_BUNDLE_FILES' => false, 
        'GENERATE_BUNDLEGROUP_FILES' => true, 
        'GENERATE_BUNDLE_FILES_ON_RUNTIME' => true, 
        'GENERATE_LOADING_FRAME_RESOURCE_MAPPING' => false, 
        'ENQUEUE_FILES_TYPE' => 'bundlegroup', 
        'INCLUDE_SCRIPTS_AFTER_HTML' => true, 
        'DISABLE_SERVER_SIDE_RENDERING' => false, 
        'USE_CACHE' => true, 
        'USE_MINIFIED_RESOURCES' => true, 
        'ACCESS_EXTERNAL_CDN_RESOURCES' => false, 
        'USE_BUNDLED_RESOURCES' => true, 
        'EXTRACT_RESPONSE_INTO_JS_FILES_ON_RUNTIME' => false, 
        'REMOVE_DATABASES_FROM_OUTPUT' => true, 
        'RESOURCES_INCLUDE_TYPE' => 'header', 
        'DISABLE_DEFINITION_RESOLVER' => false, 
        'DISABLE_PERSISTENT_DEFINITIONS' => false, 
        'DISABLE_SAVING_DEFINITION_FILE_ON_EACH_REQUEST' => true, 
        'COMPACT_RESPONSE_JSON_KEYS' => false, 
        'USE_LOCAL_STORAGE' => true, 
        'ENABLE_CONFIG_BY_PARAMS' => false, 
        'DISABLE_JS' => false, 
        'LOAD_FRAME_RESOURCES' => false, 
        'BUNDLE_CHUNK_SIZE' => 4, 
        'LOAD_DYNAMICALLY_GENERATED_RESOURCE_FILES' => true, 
        'DISABLE_PRELOADING_PAGES' => false, 
        'THROW_EXCEPTION_ON_TEMPLATE_ERROR' => false, 
        'ENABLE_EXTRA_ROUTES_BY_PARAMS' => false, 
        'FAIL_IF_SUBCOMPONENT_DATALOADER_IS_UNDEFINED' => false, 
        'DISABLE_SENDING_EMAILS_BY_AWS_SES' => false, 
        'DISABLE_API' => false, 
        'DISABLE_CUSTOM_CMS_CODE' => false, 
        'EXTERNAL_SITES_RUN_SAME_SOFTWARE' => false,
    ];
} else { 
    $lines = [
        'USE_APPSHELL' => false, 
        'DISABLE_SERVICE_WORKERS' => true, 
        'USE_PROGRESSIVE_BOOTING' => false, 
        'USE_CODE_SPLITTING' => false, 
        'GENERATE_CODE_SPLITTING_FILES' => true, 
        'GENERATE_BUNDLE_FILES' => false, 
        'GENERATE_BUNDLEGROUP_FILES' => false, 
        'GENERATE_BUNDLE_FILES_ON_RUNTIME' => false, 
        'GENERATE_LOADING_FRAME_RESOURCE_MAPPING' => false, 
        'ENQUEUE_FILES_TYPE' => 'bundlegroup', 
        'INCLUDE_SCRIPTS_AFTER_HTML' => false, 
        'DISABLE_SERVER_SIDE_RENDERING' => false, 
        'USE_CACHE' => false, 
        'USE_MINIFIED_RESOURCES' => false, 
        'ACCESS_EXTERNAL_CDN_RESOURCES' => false, 
        'USE_BUNDLED_RESOURCES' => false, 
        'EXTRACT_RESPONSE_INTO_JS_FILES_ON_RUNTIME' => false, 
        'REMOVE_DATABASES_FROM_OUTPUT' => false, 
        'RESOURCES_INCLUDE_TYPE' => 'header', 
        'DISABLE_DEFINITION_RESOLVER' => true, 
        'DISABLE_PERSISTENT_DEFINITIONS' => true, 
        'DISABLE_SAVING_DEFINITION_FILE_ON_EACH_REQUEST' => true, 
        'COMPACT_RESPONSE_JSON_KEYS' => false, 
        'USE_LOCAL_STORAGE' => false, 
        'ENABLE_CONFIG_BY_PARAMS' => false, 
        'DISABLE_JS' => false, 
        'LOAD_FRAME_RESOURCES' => false, 
        'BUNDLE_CHUNK_SIZE' => 4, 
        'LOAD_DYNAMICALLY_GENERATED_RESOURCE_FILES' => true, 
        'DISABLE_PRELOADING_PAGES' => false, 
        'THROW_EXCEPTION_ON_TEMPLATE_ERROR' => true, 
        'ENABLE_EXTRA_ROUTES_BY_PARAMS' => false, 
        'FAIL_IF_SUBCOMPONENT_DATALOADER_IS_UNDEFINED' => true, 
        'DISABLE_SENDING_EMAILS_BY_AWS_SES' => false, 
        'DISABLE_API' => false, 
        'DISABLE_CUSTOM_CMS_CODE' => false, 
        'EXTERNAL_SITES_RUN_SAME_SOFTWARE' => false,
    ];
} 
$output = ''; 
foreach($lines as $variable => $value) { 
    $output .= $variable.'='.(is_bool($value) ? ($value ? "true" : "false") : $value).PHP_EOL; 
} 
$fp = fopen($_SERVER['PWD'].'/config/.env', 'w'); 
fwrite($fp, $output); 
fclose($fp);