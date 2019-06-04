<template>
	<div>
		<v-container grid-list-md>
			<v-card>
				<v-card-title primary-title>
					<div class="title">Patient page</div>
				</v-card-title>
				<v-card-text>
					<v-form>
						<v-layout row wrap justify-center>
							<v-flex xs12>
								<v-text-field hide-details label="Name"></v-text-field>
							</v-flex>

							<v-flex xs12>
								<v-text-field hide-details label="Phone"></v-text-field>
							</v-flex>

							<v-flex xs12>
								<v-text-field hide-details label="Email"></v-text-field>
							</v-flex>

							<v-flex xs12 text-xs-center>
								<v-btn color="primary" class="text-none" rounded>Save</v-btn>
							</v-flex>
						</v-layout>
					</v-form>
				</v-card-text>
			</v-card>
		</v-container>
	</div>
</template>

<script>
export default {
	data: () => ({}),
	mounted() {
		// this.$vuetify.rtl = true;
	}
};
</script>