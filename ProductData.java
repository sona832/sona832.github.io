import java.util.ArrayList;
import java.util.List;

public class ProductData {
    public static List<Product> getProducts() {
        List<Product> products = new ArrayList<>();

        // Sample products data
        products.add(new Product("Product 1", 29.99, "product1.jpg"));
        products.add(new Product("Product 2", 39.99, "product2.jpg"));
        products.add(new Product("Product 3", 19.99, "product3.jpg"));

        return products;
    }
}
