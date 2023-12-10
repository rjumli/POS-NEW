<template>
    <b-modal v-model="showModal" title="Confirm" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>    
        <div class="mt-0" v-if="Object.keys(errors).length === 0">
            <div class="table-responsive">
                <table class="table table-nowrap table-bordered align-middle mb-0">
                    <thead class="table-light">
                        <tr class="fw-semibold text-center">
                            <th colspan="2">{{customer.name}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="50%"  class="text-center">Subtotal</td>
                            <td width="50%" class="text-center"> {{formatMoney(subtotal)}}</td>
                        </tr>
                        <tr>
                            <td width="50%"  class="text-center">Discount</td>
                            <td width="50%" class="text-center"> {{formatMoney(discounted)}}</td>
                        </tr>
                        <tr>
                            <td width="50%"  class="text-center">Tax</td>
                            <td width="50%" class="text-center"> {{formatMoney(tax)}}</td>
                        </tr>
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <td width="50%"  class="text-center fw-semibold">Grand Total</td>
                            <td width="50%" class="text-center fw-semibold"> {{formatMoney(total)}}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
            <div class="mt-0" v-else>
            <p class="text-muted mb-2">Please check the following fields.</p>
        </div>
        <div class="live-preview">
            <ul class="list-group">
                <li class="list-group-item text-danger" v-for="(error,index) in errors" v-bind:key="index"><i class="mdi mdi-check-bold align-middle lh-1 me-2"></i> 
                    {{ error }} 
                </li>
            </ul>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" :disabled="form.processing" block>Save</b-button>
        </template>
    </b-modal>
</template>
<script>
import VueBarcode from '@chenfengyuan/vue-barcode';
export default {
    components : {VueBarcode},
    data(){
        return {
            showModal: false,
            value: '',
            errors: [],
            form: {},
            customer: '',
            payment: '',
            discount: '',
            discounted: 0,
            tax: 0,
            subtotal: 0,
            total: 0,
            lists: []
        }
    },
    methods : {
        set(lists,customer,payment,discount,subtotal,discounted,tax,total) {
            this.lists = lists;
            this.customer = customer;
            this.payment = payment;
            this.discount = discount;
            this.subtotal = subtotal;
            this.discounted = discounted;
            this.tax = tax, 
            this.total = total;
            this.errors = [];
            this.showModal = true;
        },
        create(){
            this.form = this.$inertia.form({
                customer_id: (this.customer) ? this.customer.id : '', 
                payment_id: (this.payment) ? this.payment.id : '', 
                discount_id: (this.discount) ? this.discount.id : '', 
                discount: this.discounted,
                tax: this.tax,
                subtotal: this.subtotal,
                total: this.total,
                status_id: 24,
                lists: this.lists
            })

            this.form.post('/sales',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                    this.$emit('clear',true);
                },
            });
            
            // this.$inertia.post('/sales', this.value, {
            //     preserveScroll: true,
            //     forceFormData: true,
            //     onSuccess: (response) => {
            //         this.showModal = false;
            //         this.errors = [];
            //     },
            //     onError: () => {
            //         this.errors = this.$page.props.errors;
            //     }
            // });
        },
        hide(){
            this.showModal = false;
        },
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>
<style>
.multiselect__single {
    font-size: 12px;
}
</style>
