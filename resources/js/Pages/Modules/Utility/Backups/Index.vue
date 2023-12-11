<template>
    <Head title="Customer Management" />
    <!-- <PageHeader :title="title" :items="items" /> -->

    <b-row>
        <b-col xl="12">
            <!-- <b-card no-body>
                <b-card-body style="height: calc(100vh - 284px)"> -->
            <div class=" d-flex align-items-center">
                <h3 class="flex-grow-1 mb-n3">Backup and Restore</h3>
                <div class="flex-shrink-0">
                    <div class="input-group mb-1">
                        <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                        <input type="text" v-model="keyword" placeholder="Search Name" class="form-control" style="width: 50%;">
                        
                        <b-button @click="openCreate()" type="button" variant="primary">
                            <i class="ri-add-circle-fill align-bottom me-1"></i> New Discount
                        </b-button>
                    </div>
                </div>
            </div>
                <!-- </b-card-body>
            </b-card> -->
            <hr class="text-muted"/>
        </b-col>

        <b-col xl="12">
            <div class="table-responsive">
                {{  lists  }}
            </div>
        </b-col>
    </b-row>
    <Create :dropdowns="dropdowns" @message="fetch()" ref="create"/>
    <Update ref="update" @message="fetch()"/>
</template>
<script>
import Update from './Update.vue';
import Create from './Create.vue';
import PageHeader from "@/Shared/Components/PageHeader.vue";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { PageHeader, Pagination, Create, Update },
    props: ['dropdowns'],
    data() {
        return {
            title: "Discount Management",
            items: [{text: "View",href: "/"},{ text: "Dasboard",active: true}, ],
            keyword: '',
            lists: [],
            meta: {},
            links: {},
        };
    },
    watch: {
        keyword(newVal){
            this.checkSearchStr(newVal);
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url) {
            page_url = page_url || '/backups';
            axios.get(page_url, {
                params: {
                    keyword: this.keyword,
                    options: 'lists',
                }
            })
            .then(response => {
                this.lists = response.data;
            })
            .catch(err => console.log(err));
        },
        openCreate(){
            this.$refs.create.show();
        },
        edit(data){
            this.$refs.create.edit(data);
        },
        update(data){
            this.$refs.update.set(data);
        },
        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return '₱'+val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>
