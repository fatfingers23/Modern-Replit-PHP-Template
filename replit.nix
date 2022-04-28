{ pkgs }: {
	deps = [
		  pkgs.php80
      pkgs.nodejs-16_x
      pkgs.nodePackages.intelephense
      pkgs.php80Packages.composer
	];
}