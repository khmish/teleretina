<template>
	<div>
		<v-container class="pb-0 pt-5">
			<v-layout text-xs-center wrap row justify-center>
				<v-flex xs12 mb-5>
					<v-container class="grey lighten-4" style="border-radius: 50px">
						<v-container class="pa-0 py-5 my-5">
							<v-layout row wrap align-center>
								<v-flex xs12 sm2 shrink text-sm-right>
									<v-img src="/res/logo.png" class="my-3" contain height="96"></v-img>
								</v-flex>
								<v-flex expand text-sm-left>
									<h1 class="display-2 mb-3">
										Welcome to
										<span class="primary--text font-weight-bold">Tele</span>Retina
									</h1>
								</v-flex>
								<v-flex xs12 text-xs-left>
									<p class="subheading font-weight-regular">{{ headline }}</p>
								</v-flex>
							</v-layout>
						</v-container>
					</v-container>
				</v-flex>
			</v-layout>
		</v-container>

		<v-container grid-list-lg>
			<v-layout text-xs-center wrap row justify-center>
				<v-flex xs12 md4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center>
							<v-flex xs12>
								<v-icon large class="primary--text">mdi-information</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">About Us</div>
							</v-flex>
							<v-flex
								xs12
							>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fuga, sunt, laborum nobis, sequi iusto cumque ea debitis mollitia quos inventore a unde. Quod quam laudantium natus nisi culpa consequatur!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center>
							<v-flex xs12>
								<v-icon large class="primary--text">mdi-eye</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Vision</div>
							</v-flex>
							<v-flex
								xs12
							>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus harum ut ipsum error autem eum!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center>
							<v-flex xs12>
								<v-icon large class="primary--text">mdi-lightbulb-on</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Message</div>
							</v-flex>
							<v-flex
								xs12
							>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ab odit quisquam obcaecati adipisci pariatur, unde maiores, placeat dolor eveniet rem architecto laudantium facere exercitationem non dicta? Veritatis, totam vero!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center>
							<v-flex xs12>
								<v-icon large class="primary--text">mdi-flag</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Goals</div>
							</v-flex>
							<v-flex
								xs12
							>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident quibusdam delectus assumenda minus quisquam quod architecto reprehenderit. Recusandae, eius minima.</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center>
							<v-flex xs12>
								<v-icon large class="primary--text">mdi-image-filter-hdr</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Our Target</div>
							</v-flex>
							<v-flex
								xs12
							>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque vero corporis fugit!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center>
							<v-flex xs12>
								<v-icon large class="primary--text">mdi-help</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Some action</div>
							</v-flex>
							<v-flex xs12>
								<v-btn color="primary text-none" round>Action</v-btn>
							</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 mt-2>
					<v-container class="pa-0 py-5 my-5" style="border: 1px dashed grey">
						<div class="headline font-weight-bold">Advertisement Panel</div>
					</v-container>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
	data: () => ({
		headline:
			"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque atque error porro repellat numquam ex sed. Tempora repellendus soluta sequi officiis, dignissimos aliquam sint distinctio sapiente suscipit aut laborum natus!."
	})
};
</script>

<style>
.round {
	border-radius: 15px;
}

.primary--text .v-label {
	color: inherit;
}
</style>