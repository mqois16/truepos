<template>

    <Head>
        <title>Transactions - Aplikasi Kasir</title>
    </Head>
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 rounded-3 shadow">
                            <div class="card-body">

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-barcode"></i></span>
                                    <input type="text" class="form-control" v-model="barcode" @keyup="searchProduct"
                                        placeholder="Scan or Input Barcode">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nama Produk</label>
                                    <input type="text" class="form-control" :value="product.title"
                                        placeholder="Nama Produk" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Qty</label>
                                    <input type="number" class="form-control text-center" v-model="qty"
                                        placeholder="Qty" min="1">
                                </div>
                                <div class="text-end">
                                    <button @click.prevent="clearSearch"
                                        class="btn btn-warning btn-md border-0 shadow text-uppercase mt-3 me-2"
                                        :disabled="!product.id">CLEAR</button>
                                    <button @click.prevent="addToCart"
                                        class="btn btn-success btn-md border-0 shadow text-uppercase mt-3"
                                        :disabled="!product.id">ADD ITEM</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div v-if="session.error" class="alert alert-danger">
                            {{ session.error }}
                        </div>

                        <div v-if="session.success" class="alert alert-success">
                            {{ session.success }}
                        </div>

                        <div class="card border-0 rounded-3 shadow border-top-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <h4 class="fw-bold">GRAND TOTAL</h4>
                                    </div>
                                    <div class="col-md-8 col-8 text-end">
                                        <h4 class="fw-bold py-3 display-3">Rp. {{ formatPrice(grandTotal) }}</h4>
                                        <div v-if="change > 0">
                                            <hr>
                                            <h5 class="text-success">Kembalian : <strong>Rp. {{ formatPrice(change)
                                                    }}</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 rounded-3 shadow">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Kasir</label>
                                        <input class="form-control" type="text" :value="auth.user.name" readonly>
                                    </div>
                                    <!-- <div class="col-md-6 float-end">
                                        <label class="fw-bold">Customer</label>
                                        <VueMultiselect v-model="customer_id" label="name" track-by="name"
                                            :options="customers"></VueMultiselect>
                                    </div> -->
                                    <div class="col-md-6 float-end">
                                        <label class="fw-bold">Metode Pembayaran </label>
                                        <VueMultiselect v-model="payment_id" 
                                        label="name" 
                                        track-by="name"
                                        :options="payments" 
                                        placeholder="Tunai (default)"></VueMultiselect>
                                    </div>

                                </div>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr style="background-color: #e6e6e7;">
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="cart in carts" :key="cart.id">
                                            <td class="text-center">
                                                <button @click.prevent="destroyCart(cart.id)"
                                                    class="btn btn-danger btn-sm rounded-pill"><i
                                                        class="fa fa-trash"></i></button>
                                            </td>
                                            <td>{{ cart.product.title }}</td>
                                            <td>Rp. {{ formatPrice(cart.product.sell_price) }}</td>
                                            <td class="text-center">{{ cart.qty }}</td>
                                            <td class="text-end">Rp. {{ formatPrice(cart.price) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end fw-bold" style="background-color: #e6e6e7;">
                                                TOTAL</td>
                                            <td class="text-end fw-bold" style="background-color: #e6e6e7;">Rp. {{
                                                formatPrice(carts_total) }}</td>
                                        </tr>
                                        <tr style="color: red" v-if="percentValue || discount">
                                            <td colspan="4" class="text-end fw-bold"
                                                style="background-color: #e6e6e7; ">
                                                TOTAL DISCOUNT</td>
                                            <td class="text-end fw-bold" style="background-color: #e6e6e7;">- Rp. {{
                                                Math.round(percentValue) +
                                                discount
                                            }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                    <div class="mt-auto bd-highlight">
                                        <label>Discount (<b>%</b>)</label>
                                        <input type="number" v-model="percentDiscount" @keyup="setDiscount"
                                            class="form-control" placeholder="0">
                                    </div>
                                    <div class="mt-auto bd-highlight">
                                        <p style="color: gray" v-if="parseInt(percentValue)"> - Rp. {{
                                            Math.round(percentValue) }}
                                        </p>
                                    </div>
                                    <div class="mt-1 bd-highlight">
                                        <label>Discount (<b>Rp.</b>)</label>
                                        <input type="number" v-model="discount" @keyup="setDiscount"
                                            class="form-control" placeholder="0">
                                    </div>

                                    <div class="bd-highlight mt-4">
                                        <label>Bayar (Rp.)</label>
                                        <input type="number" v-model="cash" @keyup="setChange" class="form-control"
                                            placeholder="0">
                                    </div>
                                </div>
                                <div class="text-end mt-4">
                                    <button
                                        class="btn btn-warning btn-md border-0 shadow text-uppercase me-2">Cancel</button>
                                    <button @click.prevent="storeTransaction"
                                        class="btn btn-purple btn-md border-0 shadow text-uppercase" :disabled="cash < grandTotal || grandTotal == 0 || (Math.round(percentValue) +
                                            discount) < 0 || (Math.round(percentValue) +
                                                discount) > grandTotal">Pay Order & Print</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>

//import layout
import LayoutApp from '../../../Layouts/App.vue';

//import Heade from Inertia
import { Head, router } from '@inertiajs/vue3';

//import VueMultiselect
import VueMultiselect from 'vue-multiselect';
import 'vue-multiselect/dist/vue-multiselect.css';

//import ref form vue
import { ref, watch } from 'vue';

//import axios
import axios from 'axios';

//import sweet alert2
import Swal from 'sweetalert2';

export default {
    //layout
    layout: LayoutApp,

    //register components
    components: {
        Head,
        VueMultiselect
    },

    //props
    props: {
        auth: Object,
        customers: Array,
        payments: Array,
        carts_total: Number,
        session: Object,
        carts: Array
    },

    //composition API
    setup(props) {

        //define state
        const barcode = ref('');
        const product = ref({});
        const qty = ref(1);

        //metho "searchProduct"
        const searchProduct = () => {

            //fetch with axios
            axios.post('/apps/transactions/searchProduct', {

                //send data "barcode"
                barcode: barcode.value

            }).then(response => {
                if (response.data.success) {

                    //assign response to state "product"
                    product.value = response.data.data;
                } else {

                    //set state "product" to empty object
                    product.value = {};
                }
            });
        }

        //method "clearSearch"
        const clearSearch = () => {

            //set state "product" to empty object
            product.value = {};

            //set state "barcode" to empty string
            barcode.value = '';
        }

        //define state grandTotal
        const grandTotal = ref(props.carts_total);

        //method add to cart
        const addToCart = () => {


            //send data to server
            router.post('/apps/transactions/addToCart', {

                //data
                product_id: product.value.id,
                qty: qty.value,
                sell_price: product.value.sell_price,

            }, {
                onSuccess: () => {

                    //call method "clearSaerch"
                    clearSearch();

                    //set qty to "1"
                    qty.value = 1;

                    //update state "grandTotal"
                    grandTotal.value = props.carts_total;

                    //set cash to "0"
                    cash.value = 0;

                    //set change to "0"
                    change.value = 0;
                },
            });


        }

        //method "destroyCart"
        const destroyCart = (cart_id) => {
            router.post('/apps/transactions/destroyCart', {
                cart_id: cart_id
            }, {
                onSuccess: () => {

                    //update state "grandTotal"
                    grandTotal.value = props.carts_total;

                    //set cash to "0"
                    cash.value = payment_id.id === 1 ? 0 : grandTotal.value;

                    //set change to "0"
                    change.value = 0;
                },
            })
        }

        //define state "payment_id"
        const payment_id = ref(null);
        console.log("payment_id", payment_id)
        //define state "cash", "change" dan "discount"
        const cash = ref(null);
        const change = ref(null);
        const percentDiscount = ref(null);
        const discount = ref(null);
        const percentValue = ref(null)
        console.log("nilainya adalah " + percentDiscount.value)

        const setCash = (newPaymentId) => {
            if (newPaymentId === '1') {
                cash.value = null; // Jika payment_id bernilai 1, cash bernilai null
            } else {
                cash.value = grandTotal.value;
            }
        };

        watch(payment_id, (newVal) => {
            setCash(newVal.id);
        });

        const setDiscount = () => {
            percentValue.value = props.carts_total * (percentDiscount.value / 100)
            console.log("nilainya adalah " + percentValue.value)

            //set grandTotal
            grandTotal.value = props.carts_total - (percentValue.value + discount.value);

            //set cash to "0"
            cash.value = payment_id.id === 1 ? 0 : grandTotal.value;

            //set change to "0"
            change.value = 0;
        }

        // //method "setDiscount"
        // const setDiscount = () => {

        //     //set grandTotal
        //     grandTotal.value = props.carts_total - discount.value;

        //     //set cash to "0"
        //     cash.value = 0;

        //     //set change to "0"
        //     change.value = 0;
        // }

        //method "setChange"
        const setChange = () => {

            //set change
            change.value = cash.value - grandTotal.value;
        }

        //define state "customer_id"
        const customer_id = ref('');

        //method "storeTransaction"
        const storeTransaction = () => {

            //HTTP request
            axios.post('/apps/transactions/store', {

                //send data to server
                customer_id: customer_id.value ? customer_id.value.id : '',
                payment_id: payment_id.value ? payment_id.value.id : 1,
                discount: discount.value + percentValue.value,
                grand_total: grandTotal.value,
                cash: cash.value,
                change: change.value
            })
                .then(response => {

                    //call method "clearSaerch"
                    clearSearch();

                    //set qty to "1"
                    qty.value = 1;

                    //set grandTotal
                    grandTotal.value = props.carts_total;

                    //set cash to "0"
                    cash.value = 0;

                    //set change to "0"
                    change.value = 0;

                    //set customer_id to ""
                    customer_id.value = '';

                    //set payment_id to ""
                    payment_id.value = '';

                    //show success alert
                    Swal.fire({
                        title: 'Success!',
                        text: 'Transaction Successfully.',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    })
                        .then(() => {

                            setTimeout(() => {

                                //print
                                window.open(`/apps/transactions/print?invoice=${response.data.data.invoice}`, '_blank');

                                //reload page
                                location.reload();

                            }, 50);

                        })
                })

        }

        return {
            barcode,
            product,
            searchProduct,
            clearSearch,
            qty,
            grandTotal,
            addToCart,
            destroyCart,
            cash,
            change,
            discount,
            setDiscount,
            percentDiscount,
            percentValue,
            setChange,
            customer_id,
            payment_id,
            storeTransaction,
        }

    }
}
</script>

<style></style>