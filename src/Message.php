<?php
namespace HttpStatus;

class Message{
    
    /*
     * 
        1xx Informational responses
     * 
    */
    
    const INFORMATION_CONTINUE = 'Continue';
    const INFORMATION_PROTOCOL = 'Switching Protocols';
    const INFORMATION_PROCESSING = 'Processing';
    

    /*
     * 
        2xx Success
     * 
    */
    
    const SUCCESS_OK = 'OK';
    const SUCCESS_CREATED = 'Created';
    const SUCCESS_ACCEPTED = 'Accepted';
    const SUCCESS_NON_AUTHORITATIVE_INFORMATION ='Non-Authoritative Information';
    const SUCCESS_NO_CONTENT = 'No Content';
    const SUCCESS_RESET_CONTENT = 'Reset Content';
    const SUCCESS_PARTIAL_CONTENT = 'Partial Content';
    const SUCCESS_MULTI_STATUS = 'Multi-Status';
    const SUCCESS_ALREADY_REPORTED = 'Already Reported';
    const SUCCESS_IM_USED = 'IM Used';
    

    /*
     * 
        3xx Redirection
     * 
    */
    
    const REDIRECT_MULTIPLE_CHOICE = 'Multiple Choices';
    const REDIRECT_PERMANENTLY = 'Moved Permanently';
    const REDIRECT_FOUND = 'Found';
    const REDIRECT_SEE_OTHER = 'See Other';
    const REDIRECT_NOT_MODIFIED = 'Not Modified';
    const REDIRECT_USER_PROXY = 'Use Proxy';
    const REDIRECT_SWITCH_PROXY = 'Switch Proxy';
    const REDIRECT_TEMPORARY = 'Temporary Redirect'; 
    const REDIRECT_PERMANENT = 'Permanent Redirect';
    
    
    /*
     * 
        4xx Client errors
     * 
    */
      
    const ERROR_CLIENT_BAD_REQUEST = 'Bad Request';
    const ERROR_CLIENT_UNAUTHORIZED = 'Unauthorized';
    const ERROR_CLIENT_PAYMENT_REQUIRED = 'Payment Required';
    const ERROR_CLIENT_FORBIDDEN = 'Forbidden';
    const ERROR_CLIENT_NOT_FOUND = 'Not Found';
    const ERROR_CLIENT_METHOD_NOT_ALLOWED = 'Method Not Allowed';
    const ERROR_CLIENT_NOT_ACCEPTABLE = 'Not Acceptable';
    const ERROR_CLIENT_PROXY_AUTHENTICATION_REQUIRED = 'Proxy Authentication Required';
    const ERROR_CLIENT_REQUEST_TIMEOUT = 'Request Timeout';
    const ERROR_CLIENT_CONFLICT = 'Conflict';
    const ERROR_CLIENT_GONE = 'Gone';
    const ERROR_CLIENT_LENGTH_REQUIRED = 'Length Required';
    const ERROR_CLIENT_PRECONDITION_FAILED = 'Precondition Failed';
    const ERROR_CLIENT_PAYLOAD_TOO_LARGE = 'Payload Too Large';
    const ERROR_CLIENT_URI_TOO_LONG = 'URI Too Long';
    const ERROR_CLIENT_UNSUPPORTED_MEDIA_TYPE = 'Unsupported Media Type';
    const ERROR_CLIENT_RANGE_NOT_SATISFIABLE = 'Range Not Satisfiable';
    const ERROR_CLIENT_EXPECTATION_FAILED = 'Expectation Failed';
    const ERROR_CLIENT_MISDIRECT_REQUEST = 'Misdirected Request';
    const ERROR_CLIENT_UNPROCESS_ENTITY = 'Unprocessable Entity';
    const ERROR_CLIENT_LOCKED = 'Locked';
    const ERROR_CLIENT_FAIL_DEPENDENCY = 'Failed Dependency';
    const ERROR_CLIENT_UPGRADE_REQUIRED = 'Upgrade Required';
    const ERROR_CLIENT_PRECONDITION_REQUIRED = 'Precondition Required';
    const ERROR_CLIENT_TOO_MANY_REQUEST = 'Too Many Requests';
    const ERROR_CLIENT_REQUEST_HEADER_TOO_LARGE = 'Request Header Fields Too Large';

    
    /*
     * 
        5xx Server error
     * 
    */
       
    const ERROR_SERVER_INTERNAL_ERROR = 'Internal Server Error';
    const ERROR_SERVER_NOT_IMPLEMENTED = 'Not Implemented';
    const ERROR_SERVER_BAD_REQUEST = 'Bad Gateway';
    const ERROR_SERVER_SERVICE_UNAVAILABLE = 'Service Unavailable';
    const ERROR_SERVER_GATEWAY_TIMEOUT = 'Gateway Time-out';
    const ERROR_SERVER_HTTP_VERSION_NOT_SUPPORTED = 'HTTP Version Not Supported';
    const ERROR_SERVER_VARIANT_NEGOTIATES = 'Variant Also Negotiates';
    const ERROR_SERVER_INSUFFICIENT_STORAGE = 'Insufficient Storage';
    const ERROR_SERVER_LOOP_DETECTED = 'Loop Detected';
    const ERROR_SERVER_NOT_EXTENDED = 'Not Extended';
    const ERROR_SERVER_NETWORK_AUTH_REQUIRE = 'Network Authentication Required';

}
