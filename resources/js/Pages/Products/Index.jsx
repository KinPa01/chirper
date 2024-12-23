import { Link } from '@inertiajs/react';

export default function Index({ products }) {
    return (
        <div className="product-container">
            <h1 className="title">IT Products</h1>
            <div className="product-grid">
                {products.map((product) => (
                    <div className="product-card" key={product.id}>
                        <img src={product.image} alt={product.name} className="product-image" />
                        <h2 className="product-name">{product.name}</h2>
                        <p className="product-price">${product.price}</p>
                        <Link href={`/products/${product.id}`} className="product-link">
                            View Details
                        </Link>
                    </div>
                ))}
            </div>
        </div>
    );
}
