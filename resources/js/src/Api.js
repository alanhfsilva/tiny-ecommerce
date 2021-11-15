const axios = window.axios;
const BASE_API_URL = 'http://nvm03.com.br:8000/api';

export default {
    getAllProducts: () => 
        axios.get(`${BASE_API_URL}/products`),
    deleteProduct: (id) => 
        axios.delete(`${BASE_API_URL}/products/${id}`),

}