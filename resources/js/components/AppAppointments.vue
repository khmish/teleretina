<template>
	<div>
		<v-container grid-list-md>
			<v-card>
				<v-card-title primary-title>
					<v-layout row wrap>
						<v-flex>
							<div class="title">Today's Appointments</div>
						</v-flex>
						<v-flex>
							<v-text-field
								append-icon="mdi-magnify"
								label="Search"
								single-line
								hide-details
								v-model="search"
							></v-text-field>
						</v-flex>
					</v-layout>
				</v-card-title>
				<v-card-text class="pa-0 pt-4">
					<v-data-table
						:headers="headers"
						:items="items"
						hide-actions
						:loading="loading"
						no-data-text="Fetching..."
						:search="search"
						dense
					>
						<template v-slot:items="props">
							<td>{{ props.item.id }}</td>
							<td>{{ props.item.name }}</td>
							<td>{{ props.item.doctor }}</td>
							<td>{{ props.item.appointment_date }}</td>
							<td>{{ props.item.appointment_time }}</td>
							<td>
								<v-switch v-model="props.item.attend" hide-details></v-switch>
							</td>
							<td>
								<v-btn
									color="success"
									class="text-none"
									small
									round
									@click="goToCheckUp(props.item.id)"
								>Select</v-btn>
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
				text: "Patient Name",
				align: "left",
				value: "fname"
			},
			{
				text: "Doctor",
				align: "left",
				value: "doctor"
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
			{ sortable: false },
			{
				text: "#",
				align: "left",
				value: "patient_id",
				class: "hide"
			}
		],
		items: [],
		loading: true,
		search: ""
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
						thisVue.items = response.data.map(item => {
							item.name = item.patient.firstName + " " + item.patient.lastName;
							item.doctor = item.doctor.firstName + " " + item.doctor.lastName;
							item.patient = item.patient.id;
							return item;
						});
					}
				})
				.catch(error => {
					console.log(error);
				});
		},
		goToCheckUp(appointmentId) {
			window.open("/checkup/" + appointmentId, "_blank");
		}
	}
};
</script>

<style>
.v-datatable thead th.column {
	background-color: #fafafa;
	font-weight: bold;
}

.hide {
	display: none;
}
</style>
