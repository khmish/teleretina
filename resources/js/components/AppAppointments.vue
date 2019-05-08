<template>
	<div>
		<v-container grid-list-md>
			<v-card>
				<v-card-title primary-title>
					<div class="title">Today's Appointments</div>
				</v-card-title>
				<v-card-text class="pa-0 pt-4">
					<v-data-table
						:headers="headers"
						:items="items"
						hide-actions
						:loading="loading"
						no-data-text="Fetching..."
						dense
					>
						<template v-slot:items="props">
							<td>{{ props.item.id }}</td>
							<td>{{ props.item.fname }}</td>
							<td>{{ props.item.lname }}</td>
							<td>{{ props.item.appointment_date }}</td>
							<td>{{ props.item.appointment_time }}</td>
							<td>
								<v-checkbox v-model="props.item.attend" hide-details></v-checkbox>
							</td>
							<td>
								<v-btn color="success" class="text-none" small round>Select</v-btn>
							</td>
							<td>
								<v-btn color="error" class="text-none" small round>Send reminder</v-btn>
							</td>
						</template>
					</v-data-table>
				</v-card-text>
			</v-card>
		</v-container>
	</div>
</template>

<script>
const axios = require("axios");

export default {
	data: () => ({
		headers: [
			{
				text: "#",
				align: "left",
				value: "id"
			},
			{
				text: "First Name",
				align: "left",
				value: "fname"
			},
			{
				text: "Last Name",
				align: "left",
				value: "lname"
			},
			{
				text: "Date",
				align: "left",
				value: "appointment_date"
			},
			{
				text: "Time",
				align: "left",
				value: "appointment_time"
			},
			{
				text: "Attend",
				align: "left",
				value: "attend"
			},
			{ sortable: false },
			{ sortable: false }
		],
		items: [],
		loading: true
	}),
	mounted() {
		this.fetchData();
	},
	methods: {
		fetchData() {
			const thisVue = this;
			const url = "/appointmentsList";

			axios
				.get(url)
				.then(response => {
					console.log(response);
					if (response.status == 200) {
						console.log("200");
						thisVue.loading = false;
						thisVue.items = response.data.data;
					}
				})
				.catch(error => {
					console.log(error);
				});
		}
	}
};
</script>

<style>
.v-datatable thead th.column {
	background-color: #fafafa;
	font-weight: bold;
}
</style>
