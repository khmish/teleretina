<template>
	<div>
		<v-container grid-list-md>
			<v-card>
				<v-card-title primary-title>
					<div class="title">Report page</div>
				</v-card-title>
				<v-card-text>
					<v-layout row wrap justify-center>
						<v-flex xs12 sm6 v-for="s in ['Left eye','Right eye']" :key="s">
							<v-container>
								<v-layout row wrap text-xs-center>
									<v-flex xs12>
										<div class="title">{{ s }}</div>
									</v-flex>
									<v-flex xs12 sm6 v-for="i in 2" :key="i">
										<v-img
											src="/res/retina.jpg"
											alt="eye"
											:height="$vuetify.breakpoint.xsOnly ? '100' : '200'"
										></v-img>
									</v-flex>
									<v-flex xs12>
										<v-card flat>
											<v-card-text style="border: 1px dashed grey">
												<v-checkbox label="Option 1" color="primary" hide-details style="margin-top: 0px;"></v-checkbox>
												<v-checkbox label="Option 2" color="primary" hide-details style="margin-top: 0px;"></v-checkbox>
												<v-checkbox label="Option 3" color="primary" hide-details style="margin-top: 0px;"></v-checkbox>
												<v-checkbox label="Option 4" color="primary" hide-details style="margin-top: 0px;"></v-checkbox>
												<v-checkbox label="Option 5" color="primary" hide-details style="margin-top: 0px;"></v-checkbox>
											</v-card-text>
										</v-card>
									</v-flex>
								</v-layout>
							</v-container>
						</v-flex>

						<v-flex xs12 sm6>
							<v-layout row wrap justify-end>
								<v-flex xs12>
									<v-text-field hide-details label="Attachment"></v-text-field>
								</v-flex>

								<v-flex xs12>
									<v-text-field hide-details label="Patient"></v-text-field>
								</v-flex>

								<v-flex xs12>
									<v-text-field hide-details label="Clinic"></v-text-field>
								</v-flex>

								<v-flex xs12>
									<v-text-field hide-details label="Date"></v-text-field>
								</v-flex>

								<v-flex xs12>
									<v-textarea hide-details label="Description"></v-textarea>
								</v-flex>
							</v-layout>
						</v-flex>

						<v-flex xs12>
							<v-layout row wrap text-xs-center>
								<v-flex xs12>
									<v-btn color="primary" class="text-none" rounded>Send</v-btn>
								</v-flex>
							</v-layout>
						</v-flex>
					</v-layout>
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