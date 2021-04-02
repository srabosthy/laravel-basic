<template>
    <div class="container">
        <h2>List of Product</h2>
        <table class="table table-hover">
            <thead >
                <tr>
                    <th>Product Id</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.id }}</td>
                    <td>{{ product.product }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.category }}</td>
                    <th><router-link :to="{ path: './update/'+`${product.id}`, component: Update , params: { id: product.id },}" class="btn btn-warning"> Edit </router-link></th>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    data() {
        return{
            fields: ['Id','Product','Price','category','Edit'],
            products: []
        }
    },
    mounted() {
         const baseURI = 'http://127.0.0.1:8000/api/product'
         this.$http.get(baseURI)
         .then((result) => {
            this.products = result.data.products,
            console.log(this.products)

      })
    }
}
</script>
<style scoped>

</style>