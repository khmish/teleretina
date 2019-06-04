<template>
	<div>
		<v-container grid-list-md>
			<v-card>
				<v-card-title primary-title>
					<div class="title">Patient Medical Information page</div>
				</v-card-title>
				<v-card-text>
					<v-banner sticky single-line>
						<v-btn text class="text-none" outline>Back</v-btn>
						<span class="pl-5">#12345 - Patinet Name</span>
						<template #actions>
							<v-btn text class="text-none" outline>Clear</v-btn>
							<v-btn text class="text-none" outline color="primary">Print</v-btn>
						</template>
					</v-banner>
					<v-form>
						<v-layout row wrap justify-center class="pt-2">
							<v-flex xs12>
								<div class="subtitle-1">Consent for agreement</div>
								<v-switch color="primary">
									<template #prepend>
										<v-label>No</v-label>
									</template>
									<template #append>
										<v-label>Yes</v-label>
									</template>
								</v-switch>
							</v-flex>

							<v-flex xs12>
								<div class="subtitle-1">Reason for eye check up</div>
								<v-radio-group>
									<v-radio color="primary" label="DM" value="DM"></v-radio>
									<v-radio color="primary" label="Glaucoma" value="Glaucoma"></v-radio>
									<v-radio color="primary" label="AMD" value="AMD"></v-radio>
								</v-radio-group>
							</v-flex>

							<v-flex xs12>
								<v-textarea hide-details outlined label="Comment"></v-textarea>
							</v-flex>

							<v-flex xs12>
								<div class="subtitle-1">Diabetis melitus</div>
								<v-switch color="primary">
									<template #prepend>
										<v-label>No</v-label>
									</template>
									<template #append>
										<v-label>Yes</v-label>
									</template>
								</v-switch>
							</v-flex>

							<v-flex xs12>
								<v-text-field hide-details outlined label="Duration" suffix="years"></v-text-field>
							</v-flex>

							<v-flex xs12>
								<div class="subtitle-1">Using insulin</div>
								<v-switch color="primary">
									<template #prepend>
										<v-label>No</v-label>
									</template>
									<template #append>
										<v-label>Yes</v-label>
									</template>
								</v-switch>
							</v-flex>

							<v-flex xs12>
								<div class="subtitle-1">Blood pressure medication</div>
								<v-switch color="primary">
									<template #prepend>
										<v-label>No</v-label>
									</template>
									<template #append>
										<v-label>Yes</v-label>
									</template>
								</v-switch>
							</v-flex>

							<v-flex xs12>
								<div class="subtitle-1">Visual acuity</div>
								<v-text-field hide-details outlined label="Right Eye"></v-text-field>
								<v-text-field hide-details outlined label="Left Eye" class="pt-2"></v-text-field>
							</v-flex>

							<v-flex xs12>
								<div class="subtitle-1">Last exam was with dilation</div>
								<v-switch color="primary">
									<template #prepend>
										<v-label>No</v-label>
									</template>
									<template #append>
										<v-label>Yes</v-label>
									</template>
								</v-switch>
							</v-flex>

							<v-flex xs12>
								<div class="title pb-2">Images</div>
								<v-select :items="['PC','Camera']" outlined hide-details label="Image Upload" value="PC"></v-select>
							</v-flex>

							<v-flex xs12 sm6 v-for="s in ['Left eye','Right eye']" :key="s" class="px-2">
								<v-layout row wrap>
									<v-flex xs12>
										<div>
											<span class="title">{{ s }}</span> -
											<span>Up to 2 images</span>
										</div>
										<v-btn color="success" class="text-none">Browse</v-btn>
										<v-btn color="success" class="text-none">Edit image</v-btn>
									</v-flex>
									<v-flex xs12 sm6 v-for="i in 2" :key="i">
										<v-img
											src="/res/retina.jpg"
											alt="eye"
											:height="$vuetify.breakpoint.xsOnly ? '100' : '200'"
										></v-img>
									</v-flex>
								</v-layout>
							</v-flex>

							<v-flex xs12 class="pt-5">
								<v-select :items="['DR 1','DR 2']" outlined label="Select Specilist" value="DR 1"></v-select>
							</v-flex>

							<v-flex xs12 text-xs-center>
								<v-btn color="primary" class="text-none">Save</v-btn>
								<v-btn color="error" class="text-none">Cancel</v-btn>
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

<style module>
.v-banner__wrapper {
	padding-left: 8px !important;
}

.v-input--selection-controls {
	margin-top: 0 !important;
}
</style>
