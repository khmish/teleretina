<script>
export default {
	beforeCreate() {
		var t = this.$vuetify.theme;
		t.primary = "#2196F3";

		var i = this.$vuetify.icons;
		i.menu = "mdi-menu";
		i.expand = "mdi-menu-down";
		i.dropdown = "mdi-arrow-down-drop-circle";
		i.next = "mdi-chevron-right";
		i.prev = "mdi-chevron-left";
		i.delimiter = "mdi-checkbox-blank-circle";
		i.subgroup = "mdi-arrow-down-drop-circle";
		i.sort = "mdi-arrow-up";
		i.delete = "mdi-close-circle";
		i.clear = "mdi-close";
		i.checkboxOff = "mdi-checkbox-blank-outline";
		i.checkboxOn = "mdi-checkbox-marked-outline";
		i.cancel = "mdi-cancel";
		i.success = "mdi-check-circle";
		i.error = "mdi-alert";
		i.radioOff = "mdi-radiobox-blank";
		i.radioOn = "mdi-checkbox-marked-circle-outline";
		// console.log(i);

		// this.$vuetify.rtl = true;
	}
};
</script>
