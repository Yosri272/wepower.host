<?php

declare(strict_types=1);

namespace Kreait\Firebase\RemoteConfig;

/**
 * @see https://firebase.google.com/docs/reference/remote-config/rest/v1/RemoteConfig#ParameterValueType
 */
enum ParameterValueType: string
{
    case UNSPECIFIED = 'PARAMETER_VALUE_TYPE_UNSPECIFIED';
<<<<<<< HEAD

    case STRING = 'STRING';

    case BOOL = 'BOOLEAN';

    case NUMBER = 'NUMBER';

=======
    case STRING = 'STRING';
    case BOOL = 'BOOLEAN';
    case NUMBER = 'NUMBER';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    case JSON = 'JSON';
}
