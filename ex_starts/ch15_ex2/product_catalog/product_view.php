<?php
class CategoryDB {
    public static function getCategories() {
        $db = Database::getDB();
        $query = 'SELECT * FROM categories
                  ORDER BY categoryID';
        $result = $db->query($query);
        $categories = array();
        foreach ($result as $row) {
            $category = new Category($row['categoryID'],
                                     $row['categoryName']);
            $categories[] = $category;
        }
        return $categories;
    }

    public static function getCategory($category_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM categories
                  WHERE categoryID = '$category_id'";
        $statement = $db->query($query);
        $row = $statement->fetch();
        $category = new Category($row['categoryID'],
                                 $row['categoryName']);
        return $category;
    }
}
?>        <p><b>Discount:</b> <?php echo $product->getDiscountPercent(); ?>%</p>
            <p><b>Your Price:</b> $<?php echo $product->getDiscountPrice(); ?>
                 (You save $<?php echo $product->getDiscountAmount(); ?>)</p>
            <form action="<?php echo '../cart' ?>" method="post">
                <input type="hidden" name="action" value="add" />
                <input type="hidden" name="product_id"
                       value="<?php echo $product->getID(); ?>" />
                <b>Quantity:</b>
                <input type="text" name="quantity" value="1" size="2" />
                <input type="submit" value="Add to Cart" />
            </form>
        </div>
    </div>
</div>
<?php include '../view/footer.php'; ?>