import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import api from '../src/Api';

const ProducList = () => {
    // const [products, setProducts] = useState(null);

    // const fetchProducts = () => {
    //     api.getAllProducts().then(res => {
    //         const result = res.data;
    //         setProducts(result.data);
    //     });
    // };
    // useEffect(() => {
    //     fetchProducts();
    // }, []);

    // const renderProducts = () => {
    //     if(!products) {
    //         return (
    //             <li>
    //                 Loading...
    //             </li>
    //         );
    //     }
    //     if(products.length === 0) {
    //         return (
    //             <li>
    //                 No products found.
    //             </li>
    //         );
    //     }

    //     return products.map((product) => (

    //         <li key={product.id}>
    //             <img 
    //                 src={product.image} 
    //                 alt={product.name} 
    //             />
    //             <div>
    //                 <strong>{product.name}</strong> {product.price}
    //             </div>
    //             <button 
    //                 type="button"
    //                 className="btn btn-sm btn-light"
    //                 onClick={() => {
    //                     if(confirm("Confirm deletion?")) {
    //                         api.deleteProduct(product.id)
    //                         .then(fetchProducts())
    //                         .catch(err => {
    //                             alert('Failed to delete!');
    //                         })
    //                     }
    //                 }}
    //             >
    //                 Delete
    //             </button>
    //         </li>
    //     ));
    // }

    return (
        <div>fasdfasdfasdfadsfasd</div>
        // <AppContainer 
        //     title="Laravel React JS - REST API"
        // >
        //     <ul className="product-list">
        //         {/* { renderProducts() } */}
        //     </ul>
        // </AppContainer>
    );
};
export default ProducList;