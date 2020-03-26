<template>
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full table-responsive">
                <label class="text-xl font-bold p-2">Filter by E title:</label>
                <input class="bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full p-2" v-model="filters.title.value"/>
                <div v-if="isLoading" class="card-body">
                    Loading...
                </div>
                <v-table v-if="!isLoading" class="table sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5"
                         :data="links"
                         :filters="filters"
                         :hideSortIcons="true"
                         :currentPage.sync="currentPage"
                         :pageSize="12"
                         @totalPagesChanged="totalPages = $event"
                >
                    <thead class="bg-blue-500 text-white" slot="head">
                    <v-th sortKey="title" scope="col" class="p-3 text-left">Title</v-th>
                    <v-th sortKey="url" scope="col" class="p-3 text-left">url</v-th>
                    <v-th sortKey="url" scope="col" class="p-3 text-left">Code</v-th>
                    <v-th sortKey="visits" scope="col" class="p-3 text-left">Visits</v-th>
                    <v-th sortKey="updated_at" scope="col" class="p-3 text-left">Updated</v-th>
                    </thead>
                    <tbody class="flex-1 sm:flex-none" slot="body" slot-scope="{displayData}">
                    <tr class="flex flex-col flex-wrap sm:table-row mb-2 sm:mb-0" v-for="row in displayData" :key="row.id">
                        <td scope="row" class="border-grey-light border hover:bg-gray-100 p-3">{{ row.title }}</td>
                        <td scope="row" class="border-grey-light border hover:bg-gray-100 p-3">{{ row.url }} </td>
                        <td scope="row" class="border-grey-light border hover:bg-gray-100 p-3">{{ row.route }} </td>
                        <td scope="row" class="border-grey-light border hover:bg-gray-100 p-3">{{ row.visits }} </td>
                        <td scope="row" class="border-grey-light border hover:bg-gray-100 p-3">{{ row.updated_at }} </td>
                    </tr>
                    </tbody>
                </v-table>
                <smart-pagination
                    :currentPage.sync="currentPage"
                    :totalPages="totalPages"
                />
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Links",
        data(){
            return {
                isLoading: false,
                links: [],
                filters: {
                    title: { value: '', keys: ['title'] },
                    visits: { value: '', keys: ['visits'] },
                    updated_at: { value: '', keys: ['updated_at'] }
                },
                currentPage: 1,
                totalPages: 0
            }
        },
        async created() {
            await this.getLinks();
        },
        methods: {
            getLinks(){
                this.isLoading = true;
                const _this = this;
                axios.get('/api/admin/links')
                    .then(res => {
                        _this.isLoading = false;
                        _this.links = res.data.data;
                    }).catch(error => {
                    console.log(error)
                })
            },
        }
    }
</script>

<style scoped>
</style>
