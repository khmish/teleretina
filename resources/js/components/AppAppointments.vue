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
                                clearable
							></v-text-field>
						</v-flex>
					</v-layout>
				</v-card-title>
				<v-card-text class="pa-0 pt-4">
					<v-data-table
						:headers="headers"
						:items="items"
						:loading="loading"
						no-data-text="Fetching..."
						:search="search"
						multi-sort
					>
						<template v-slot:item.attend="{ item }">
							<v-switch v-model="item.attend" hide-details></v-switch>
						</template>

						<template v-slot:item.actions="{ item }">
							<span style="white-space: nowrap;">
								<v-tooltip bottom>
									<template v-slot:activator="{ on }">
										<v-icon color="success" v-on="on" @click="goToCheckUp(item.id)">mdi-open-in-new</v-icon>
									</template>

									<span>Select</span>
								</v-tooltip>

								<v-tooltip bottom>
									<template v-slot:activator="{ on }">
										<v-icon color="error" v-on="on" @click=";">mdi-clock-alert</v-icon>
									</template>

									<span>Send reminder</span>
								</v-tooltip>
							</span>
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
				value: "name"
			},
			{
				text: "Patient ID",
				align: "left",
				value: "patient_id"
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
			{ text: "Actions", align: "center", value: "actions", sortable: false }
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

.v-input--selection-controls {
	margin-top: initial;
	padding-top: initial;
}

.v-input--selection-controls__input {
	margin-right: initial;
}
</style>
