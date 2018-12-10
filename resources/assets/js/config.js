var api_url = '';

switch (process.env.NODE_ENV) {
    case 'development':
        api_url = 'http://vuerouter.nibelung.top/api/v1';
        break;
    case 'production':
        api_url = 'http://vuerouter.nibelung.top/api/v1';
        break;
}

export const VUEROUTER_CONFIG = {
    API_URL:api_url,
}
