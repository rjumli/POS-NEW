<template>
    <b-modal v-model="showModal" title="Update Status" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>    
        <b-form class="customform">
            <div class="col-md-12 mt-1">
                <div class="form-group">
                    <label>Quantity: <span v-if="form.errors" v-text="form.errors.quantity" class="haveerror"></span></label>
                    <input type="number" class="form-control" :max="selected.quantity" min="1" v-model="quantity">
                </div>
            </div>
            <div class="col-md-12 mt-1">
                <label>Reason: <span v-if="form.errors" v-text="form.errors.reason_id" class="haveerror"></span></label>
                <multiselect v-model="reason" id="ajax" label="name" track-by="id"
                    placeholder="Select" open-direction="bottom" :options="reasons"
                    :allow-empty="false"
                    :show-labels="false">
                </multiselect> 
            </div>
            <div class="col-md-12 mt-4">
                <div class="form-group">
                    <textarea v-model="info" class="form-control" maxlength="225" rows="1" placeholder="Information"></textarea>
                </div>
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="showModal = false" variant="light" block>Cancel</b-button>
            <b-button @click="save('ok')" variant="primary"  block>Update</b-button>
        </template>
    </b-modal>
</template>

<script>
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { Multiselect },
    props: ['dropdowns'],
    data() {
        return {
            currentUrl: window.location.origin,
            showModal: false,
            selected: '',
            reason: '',
            quantity: 0,
            info: '',
            form: {}
        }
    },
    computed: {
        reasons : function() {
            return this.dropdowns.filter(x => x.classification == 'Reason').filter(x => x.type == 'customer');
        },
    },
    methods: {
        set(data){
            this.selected = data;
            this.showModal = true;
        },
        save(){
            this.form = this.$inertia.form({
                status_id: 28,
                id: this.selected.id,
                total: this.selected.total,
                quantity: this.quantity,
                reason: this.info,
                reason_id: (this.reason) ? this.reason.id : '',
            });

            this.form.put('/customer/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.showModal = false;
                    this.$emit('message',true);
                }
            });
        }
    }
}
</script>
