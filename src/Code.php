<?php
namespace HttpStatus;

class Code{
    
    /*
     * 
        1xx Informational responses
     * 
    */
    
    const INFORMATION_CONTINUE = '100';
    const INFORMATION_PROTOCOL = '101';
    const INFORMATION_PROCESSING = '102';
    

    /*
     * 
        2xx Success
     * 
    */
    
    const SUCCESS_OK = '200';
    const SUCCESS_CREATED = '201';
    const SUCCESS_ACCEPTED = '202';
    const SUCCESS_NON_AUTHORITATIVE_INFORMATION ='203';
    const SUCCESS_NO_CONTENT = '204';
    const SUCCESS_RESET_CONTENT = '205';
    const SUCCESS_PARTIAL_CONTENT = '206';
    const SUCCESS_MULTI_STATUS = '207';
    const SUCCESS_ALREADY_REPORTED = '208';
    const SUCCESS_IM_USED = '226';
    

    /*
     * 
        3xx Redirection
     * 
    */
    
    const REDIRECT_MULTIPLE_CHOICE = '300';
    const REDIRECT_PERMANENTLY = '301';
    const REDIRECT_FOUND = '302';
    const REDIRECT_SEE_OTHER = '303';
    const REDIRECT_NOT_MODIFIED = '304';
    const REDIRECT_USER_PROXY = '305';
    const REDIRECT_SWITCH_PROXY = '306';
    const REDIRECT_TEMPORARY = '307'; 
    const REDIRECT_PERMANENT = '308';
    
    
    /*
     * 
        4xx Client errors
     * 
    */
      
    const ERROR_CLIENT_BAD_REQUEST = '400';
    const ERROR_CLIENT_UNAUTHORIZED = '401';
    const ERROR_CLIENT_PAYMENT_REQUIRED = '402';
    const ERROR_CLIENT_FORBIDDEN = '403';
    const ERROR_CLIENT_NOT_FOUND = '404';
    const ERROR_CLIENT_METHOD_NOT_ALLOWED = '405';
    const ERROR_CLIENT_NOT_ACCEPTABLE = '406';
    const ERROR_CLIENT_PROXY_AUTHENTICATION_REQUIRED = '407';
    const ERROR_CLIENT_REQUEST_TIMEOUT = '408';
    const ERROR_CLIENT_CONFLICT = '409';
    const ERROR_CLIENT_GONE = '410';
    const ERROR_CLIENT_LENGTH_REQUIRED = '411';
    const ERROR_CLIENT_PRECONDITION_FAILED = '412';
    const ERROR_CLIENT_PAYLOAD_TOO_LARGE = '413';
    const ERROR_CLIENT_URI_TOO_LONG = '414';
    const ERROR_CLIENT_UNSUPPORTED_MEDIA_TYPE = '415';
    const ERROR_CLIENT_RANGE_NOT_SATISFIABLE = '416';
    const ERROR_CLIENT_EXPECTATION_FAILED = '417';
    const ERROR_CLIENT_MISDIRECT_REQUEST = '421';
    const ERROR_CLIENT_UNPROCESS_ENTITY = '422';
    const ERROR_CLIENT_LOCKED = '423';
    const ERROR_CLIENT_FAIL_DEPENDENCY = '424';
    const ERROR_CLIENT_UPGRADE_REQUIRED = '426';
    const ERROR_CLIENT_PRECONDITION_REQUIRED = '428';
    const ERROR_CLIENT_TOO_MANY_REQUEST = '429';
    const ERROR_CLIENT_REQUEST_HEADER_TOO_LARGE = '431';

    
    /*
     * 
        5xx Server error
     * 
    */
       
    const ERROR_SERVER_INTERNAL_ERROR = '500';
    const ERROR_SERVER_NOT_IMPLEMENTED = '501';
    const ERROR_SERVER_BAD_REQUEST = '502';
    const ERROR_SERVER_SERVICE_UNAVAILABLE = '503';
    const ERROR_SERVER_GATEWAY_TIMEOUT = '504';
    const ERROR_SERVER_HTTP_VERSION_NOT_SUPPORTED = '505';
    const ERROR_SERVER_VARIANT_NEGOTIATES = '506';
    const ERROR_SERVER_INSUFFICIENT_STORAGE = '507';
    const ERROR_SERVER_LOOP_DETECTED = '508';
    const ERROR_SERVER_NOT_EXTENDED = '510';
    const ERROR_SERVER_NETWORK_AUTH_REQUIRE = '511';

}
