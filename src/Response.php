<?php
namespace HttpStatus;

class Response{
    
    /*
     * 
        1xx Informational responses
     * 
    */
    
    const INFORMATION_CONTINUE = '100|Continue';
    const INFORMATION_PROTOCOL = '101|Switching Protocols';
    const INFORMATION_PROCESSING = '102|Processing';
    

    /*
     * 
        2xx Success
     * 
    */
    
    const SUCCESS_OK = '200|OK';
    const SUCCESS_CREATED = '201|Created';
    const SUCCESS_ACCEPTED = '202|Accepted';
    const SUCCESS_NON_AUTHORITATIVE_INFORMATION ='203|Non-Authoritative Information';
    const SUCCESS_NO_CONTENT = '204|No Content';
    const SUCCESS_RESET_CONTENT = '205|Reset Content';
    const SUCCESS_PARTIAL_CONTENT = '206|Partial Content';
    const SUCCESS_MULTI_STATUS = '207|Multi-Status';
    const SUCCESS_ALREADY_REPORTED = '208|Already Reported';
    const SUCCESS_IM_USED = '226|IM Used';
    

    /*
     * 
        3xx Redirection
     * 
    */
    
    const REDIRECT_MULTIPLE_CHOICE = '300|Multiple Choices';
    const REDIRECT_PERMANENTLY = '301|Moved Permanently';
    const REDIRECT_FOUND = '302|Found';
    const REDIRECT_SEE_OTHER = '303|See Other';
    const REDIRECT_NOT_MODIFIED = '304|Not Modified';
    const REDIRECT_USER_PROXY = '305|Use Proxy';
    const REDIRECT_SWITCH_PROXY = '306|Switch Proxy';
    const REDIRECT_TEMPORARY = '307|Temporary Redirect'; 
    const REDIRECT_PERMANENT = '307|Permanent Redirect';
    
    
    /*
     * 
        4xx Client errors
     * 
    */
      
    const ERROR_CLIENT_BAD_REQUEST = '400|Bad Request';
    const ERROR_CLIENT_UNAUTHORIZED = '401|Unauthorized';
    const ERROR_CLIENT_PAYMENT_REQUIRED = '402|Payment Required';
    const ERROR_CLIENT_FORBIDDEN = '403|Forbidden';
    const ERROR_CLIENT_NOT_FOUND = '404|Not Found';
    const ERROR_CLIENT_METHOD_NOT_ALLOWED = '405|Method Not Allowed';
    const ERROR_CLIENT_NOT_ACCEPTABLE = '406|Not Acceptable';
    const ERROR_CLIENT_PROXY_AUTHENTICATION_REQUIRED = '407|Proxy Authentication Required';
    const ERROR_CLIENT_REQUEST_TIMEOUT = '408|Request Timeout';
    const ERROR_CLIENT_CONFLICT = '409|Conflict';
    const ERROR_CLIENT_GONE = '410|Gone';
    const ERROR_CLIENT_LENGTH_REQUIRED = '411|Length Required';
    const ERROR_CLIENT_PRECONDITION_FAILED = '412|Precondition Failed';
    const ERROR_CLIENT_PAYLOAD_TOO_LARGE = '413|Payload Too Large';
    const ERROR_CLIENT_URI_TOO_LONG = '414|URI Too Long';
    const ERROR_CLIENT_UNSUPPORTED_MEDIA_TYPE = '415|Unsupported Media Type';
    const ERROR_CLIENT_RANGE_NOT_SATISFIABLE = '416|Range Not Satisfiable';
    const ERROR_CLIENT_EXPECTATION_FAILED = '417|Expectation Failed';
    const ERROR_CLIENT_MISDIRECT_REQUEST = '421|Misdirected Request';
    const ERROR_CLIENT_UNPROCESS_ENTITY = '422|Unprocessable Entity';
    const ERROR_CLIENT_LOCKED = '423|Locked';
    const ERROR_CLIENT_FAIL_DEPENDENCY = '424|Failed Dependency';
    const ERROR_CLIENT_UPGRADE_REQUIRED = '426|Upgrade Required';
    const ERROR_CLIENT_PRECONDITION_REQUIRED = '428|Precondition Required';
    const ERROR_CLIENT_TOO_MANY_REQUEST = '429|Too Many Requests';
    const ERROR_CLIENT_REQUEST_HEADER_TOO_LARGE = '431|Request Header Fields Too Large';

    
    /*
     * 
        5xx Server error
     * 
    */
       
    const ERROR_SERVER_INTERNAL_ERROR = '500|Internal Server Error';
    const ERROR_SERVER_NOT_IMPLEMENTED = '501|Not Implemented';
    const ERROR_SERVER_BAD_REQUEST = '502|Bad Gateway';
    const ERROR_SERVER_SERVICE_UNAVAILABLE = '503|Service Unavailable';
    const ERROR_SERVER_GATEWAY_TIMEOUT = '504|Gateway Time-out';
    const ERROR_SERVER_HTTP_VERSION_NOT_SUPPORTED = '505|HTTP Version Not Supported';
    const ERROR_SERVER_VARIANT_NEGOTIATES = '506|Variant Also Negotiates';
    const ERROR_SERVER_INSUFFICIENT_STORAGE = '507|Insufficient Storage';
    const ERROR_SERVER_LOOP_DETECTED = '508|Loop Detected';
    const ERROR_SERVER_NOT_EXTENDED = '510|Not Extended';
    const ERROR_SERVER_NETWORK_AUTH_REQUIRE = '511|Network Authentication Required';

}
