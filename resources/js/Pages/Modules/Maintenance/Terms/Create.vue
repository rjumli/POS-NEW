<template>
    <b-modal v-model="showModal" title="New Terms and Condition" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>    
        <b-form class="customform mb-2">
            <div class="row customerform">
                
                <div class="col-md-12 mt-4">
                   <div class="form-group">
                        <label>Title: <span v-if="form.errors" v-text="form.errors.title" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="term.title">
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                   <div class="form-group">
                        <textarea v-model="term.description" class="form-control" maxlength="225" rows="1" placeholder="Description"></textarea>
                    </div>
                </div>
    
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" :disabled="form.processing" block>Save</b-button>
        </template>
    </b-modal>
</template>
<script>
export default {
    data(){
        return {
            showModal: false,
            term: {
                id: '',
                title: '',
                description: ''
            },
            form: {},
            editable: false,
        }
    },
    methods : {
        show() {
            this.showModal = true;
        },
        edit(data){
            this.term = data;
            this.editable = true;
            this.showModal = true;
        },
        create(){
            this.form = this.$inertia.form({
                id: this.term.id,
                title: this.term.title,
                description: this.term.description,
                editable: this.editable
            })

            this.form.post('/terms',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                },
            });
        },
        hide(){
            this.term = {
                id: '',
                title: '',
                description: ''
            };
            this.$emit('message',true);
            this.showModal = false;
        },
    }
}
</script>
