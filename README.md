### A Docker image for A web-app containing two pages for:

### 1. Product list page

This is the first page of the website, containing a list of products each product has a checkbox to delete it.

### 2. Adding a product page

This is page display a form with A fields:

#### Each filed has a validation rule

### How to run the image

#### First Pull it from Docker hub

```
docker pull shebl/product-list
```

#### Then run it using the following command

```
docker run -p 5001:80 shebl/product-list
```

#### Then open the url

```
http://localhost:5001/
```
### Screenshots from the website
![Alt text](./README/ProductList.png?raw=true "ProductList")

![Alt text](./README/AddProduct.png?raw=true "AddProduct")
![Alt text](./README/validation.png?raw=true "validation")
