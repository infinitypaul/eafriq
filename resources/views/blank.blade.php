@extends('layouts.master')
	
@section('content')

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="{{ action('HomeController@getIndex') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
									<ul>
										<li><a href="layout_navbar_fixed.html">Fixed navbar</a></li>
										<li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li>
										<li><a href="layout_sidebar_fixed_native.html">Fixed sidebar native scroll</a></li>
										<li><a href="layout_navbar_hideable.html">Hideable navbar</a></li>
										<li><a href="layout_navbar_hideable_sidebar.html">Hideable &amp; fixed sidebar</a></li>
										<li><a href="layout_footer_fixed.html">Fixed footer</a></li>
										<li class="navigation-divider"></li>
										<li><a href="boxed_default.html">Boxed with default sidebar</a></li>
										<li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
										<li><a href="boxed_full.html">Boxed full width</a></li>
									</ul>
								</li>
								<li>
									<a href="{{ action('HomeController@getForm') }}"><i class="icon-copy"></i> <span>Form</span></a>
									<!--<ul>
										<li><a href="index.blade.php" id="layout1">Layout 1 <span class="label bg-warning-400">Current</span></a></li>
										<li><a href="../../layout_2/LTR/index.html" id="layout2">Layout 2</a></li>
										<li><a href="../../layout_3/LTR/index.html" id="layout3">Layout 3</a></li>
										<li><a href="../../layout_4/LTR/index.html" id="layout4">Layout 4</a></li>
										<li class="disabled"><a href="../../layout_5/LTR/index.html" id="layout5">Layout 5 <span class="label">Coming soon</span></a></li>
									</ul>-->
								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a>
									<ul>
										<li><a href="colors_primary.html">Primary palette</a></li>
										<li><a href="colors_danger.html">Danger palette</a></li>
										<li><a href="colors_success.html">Success palette</a></li>
										<li><a href="colors_warning.html">Warning palette</a></li>
										<li><a href="colors_info.html">Info palette</a></li>
										<li class="navigation-divider"></li>
										<li><a href="colors_pink.html">Pink palette</a></li>
										<li><a href="colors_violet.html">Violet palette</a></li>
										<li><a href="colors_purple.html">Purple palette</a></li>
										<li><a href="colors_indigo.html">Indigo palette</a></li>
										<li><a href="colors_blue.html">Blue palette</a></li>
										<li><a href="colors_teal.html">Teal palette</a></li>
										<li><a href="colors_green.html">Green palette</a></li>
										<li><a href="colors_orange.html">Orange palette</a></li>
										<li><a href="colors_brown.html">Brown palette</a></li>
										<li><a href="colors_grey.html">Grey palette</a></li>
										<li><a href="colors_slate.html">Slate palette</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
									<ul>
										<li><a href="starters/horizontal_nav.html">Horizontal navigation</a></li>
										<li><a href="starters/1_col.html">1 column</a></li>
										<li><a href="starters/2_col.html">2 columns</a></li>
										<li>
											<a href="#">3 columns</a>
											<ul>
												<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
												<li><a href="starters/3_col_double.html">Double sidebars</a></li>
											</ul>
										</li>
										<li><a href="starters/4_col.html">4 columns</a></li>
										<li>
											<a href="#">Detached layout</a>
											<ul>
												<li><a href="starters/detached_left.html">Left sidebar</a></li>
												<li><a href="starters/detached_right.html">Right sidebar</a></li>
												<li><a href="starters/detached_sticky.html">Sticky sidebar</a></li>
											</ul>
										</li>
										<li><a href="starters/layout_boxed.html">Boxed layout</a></li>
										<li class="navigation-divider"></li>
										<li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
										<li><a href="starters/layout_fixed.html">Fixed layout</a></li>
									</ul>
								</li>
								<li><a href="{{ action('HomeController@getBlank') }}"><i class="icon-list-unordered"></i> <span>Blank</span></a></li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
								<li>
									<a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
									<ul>
										<li><a href="form_inputs_basic.html">Basic inputs</a></li>
										<li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
										<li><a href="form_input_groups.html">Input groups</a></li>
										<li><a href="form_controls_extended.html">Extended controls</a></li>
										<li>
											<a href="#">Selects</a>
											<ul>
												<li><a href="form_select2.html">Select2 selects</a></li>
												<li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
												<li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
												<li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
											</ul>
										</li>
										<li><a href="form_tag_inputs.html">Tag inputs</a></li>
										<li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
										<li><a href="form_editable.html">Editable forms</a></li>
										<li><a href="form_validation.html">Validation</a></li>
										<li><a href="form_inputs_grid.html">Inputs grid</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-footprint"></i> <span>Wizards</span></a>
									<ul>
										<li><a href="wizard_steps.html">Steps wizard</a></li>
										<li><a href="wizard_form.html">Form wizard</a></li>
										<li><a href="wizard_stepy.html">Stepy wizard</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-spell-check"></i> <span>Editors</span></a>
									<ul>
										<li><a href="editor_summernote.html">Summernote editor</a></li>
										<li><a href="editor_ckeditor.html">CKEditor</a></li>
										<li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
										<li><a href="editor_code.html">Code editor</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-select2"></i> <span>Pickers</span></a>
									<ul>
										<li><a href="picker_date.html">Date &amp; time pickers</a></li>
										<li><a href="picker_color.html">Color pickers</a></li>
										<li><a href="picker_location.html">Location pickers</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
									<ul>
										<li><a href="form_layout_vertical.html">Vertical form</a></li>
										<li><a href="form.blade.php">Horizontal form</a></li>
									</ul>
								</li>
								<!-- /forms -->

								<!-- Appearance -->
								<li class="navigation-header"><span>Appearance</span> <i class="icon-menu" title="Appearance"></i></li>
								<li>
									<a href="#"><i class="icon-grid"></i> <span>Components</span></a>
									<ul>
										<li><a href="components_modals.html">Modals</a></li>
										<li><a href="components_dropdowns.html">Dropdown menus</a></li>
										<li><a href="components_tabs.html">Tabs component</a></li>
										<li><a href="components_pills.html">Pills component</a></li>
										<li><a href="components_navs.html">Accordion and navs</a></li>
										<li><a href="components_buttons.html">Buttons</a></li>
										<li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
										<li><a href="components_notifications_others.html">Other notifications</a></li>
										<li><a href="components_popups.html">Tooltips and popovers</a></li>
										<li><a href="components_alerts.html">Alerts</a></li>
										<li><a href="components_pagination.html">Pagination</a></li>
										<li><a href="components_labels.html">Labels and badges</a></li>
										<li><a href="components_loaders.html">Loaders and bars</a></li>
										<li><a href="components_thumbnails.html">Thumbnails</a></li>
										<li><a href="components_page_header.html">Page header</a></li>
										<li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
										<li><a href="components_media.html">Media objects</a></li>
										<li><a href="components_sliders.html">Slider components</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-puzzle2"></i> <span>Content appearance</span></a>
									<ul>
										<li><a href="appearance_content_panels.html">Content panels</a></li>
										<li><a href="appearance_panel_heading.html">Panel heading elements</a></li>
										<li><a href="appearance_draggable_panels.html">Draggable panels</a></li>
										<li><a href="appearance_text_styling.html">Text styling</a></li>
										<li><a href="appearance_typography.html">Typography</a></li>
										<li><a href="appearance_helpers.html">Helper classes</a></li>
										<li><a href="appearance_syntax_highlighter.html">Syntax highlighter</a></li>
										<li><a href="appearance_content_grid.html">Grid system</a></li>
									</ul>
								</li>
								<li><a href="components_animations.html"><i class="icon-spinner3 spinner"></i> <span>CSS3 animations</span></a></li>
								<li>
									<a href="#"><i class="icon-gift"></i> <span>Extra components</span></a>
									<ul>
										<li><a href="extra_affix.html">Affix and Scrollspy</a></li>
										<li><a href="extra_session_timeout.html">Session timeout</a></li>
										<li><a href="extra_idle_timeout.html">Idle timeout</a></li>
										<li><a href="extra_trees.html">Dynamic tree views</a></li>
										<li><a href="extra_context_menu.html">Context menu</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
									<ul>
										<li><a href="icons_glyphicons.html">Glyphicons</a></li>
										<li><a href="icons_icomoon.html">Icomoon</a></li>
										<li><a href="icons_fontawesome.html">Font awesome</a></li>
									</ul>
								</li>
								<!-- /appearance -->

								<!-- Layout -->
								<li class="navigation-header"><span>Layout</span> <i class="icon-menu" title="Layout options"></i></li>
								<li>
									<a href="#"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
									<ul>
										<li><a href="sidebar_default_collapse.html">Default collapsible</a></li>
										<li><a href="sidebar_default_hide.html">Default hideable</a></li>
										<li><a href="sidebar_mini_collapse.html">Mini collapsible</a></li>
										<li><a href="sidebar_mini_hide.html">Mini hideable</a></li>
										<li>
											<a href="#">Dual sidebar</a>
											<ul>
												<li><a href="sidebar_dual.html">Dual sidebar</a></li>
												<li><a href="sidebar_dual_double_collapse.html">Dual double collapse</a></li>
												<li><a href="sidebar_dual_double_hide.html">Dual double hide</a></li>
												<li><a href="sidebar_dual_swap.html">Swap sidebars</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Double sidebar</a>
											<ul>
												<li><a href="sidebar_double_collapse.html">Collapse main sidebar</a></li>
												<li><a href="sidebar_double_hide.html">Hide main sidebar</a></li>
												<li><a href="sidebar_double_fix_default.html">Fix default width</a></li>
												<li><a href="sidebar_double_fix_mini.html">Fix mini width</a></li>
												<li><a href="sidebar_double_visible.html">Opposite sidebar visible</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Detached sidebar</a>
											<ul>
												<li><a href="sidebar_detached_left.html">Left position</a></li>
												<li><a href="sidebar_detached_right.html">Right position</a></li>
												<li><a href="sidebar_detached_sticky_custom.html">Sticky (custom scroll)</a></li>
												<li><a href="sidebar_detached_sticky_native.html">Sticky (native scroll)</a></li>
												<li><a href="sidebar_detached_separate.html">Separate categories</a></li>
											</ul>
										</li>
										<li><a href="sidebar_hidden.html">Hidden sidebar</a></li>
										<li><a href="sidebar_light.html">Light sidebar</a></li>
										<li><a href="sidebar_components.html">Sidebar components</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
									<ul>
										<li><a href="navigation_vertical_collapsible.html">Collapsible menu</a></li>
										<li><a href="navigation_vertical_accordion.html">Accordion menu</a></li>
										<li><a href="navigation_vertical_sizing.html">Navigation sizing</a></li>
										<li><a href="navigation_vertical_bordered.html">Bordered navigation</a></li>
										<li><a href="navigation_vertical_right_icons.html">Right icons</a></li>
										<li><a href="navigation_vertical_disabled.html">Disabled navigation links</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
									<ul>
										<li><a href="navigation_horizontal_click.html">Submenu on click</a></li>
										<li><a href="navigation_horizontal_hover.html">Submenu on hover</a></li>
										<li><a href="navigation_horizontal_elements.html">With custom elements</a></li>
										<li><a href="navigation_horizontal_tabs.html">Tabbed navigation</a></li>
										<li><a href="navigation_horizontal_disabled.html">Disabled navigation links</a></li>
										<li><a href="navigation_horizontal_mega.html">Horizontal mega menu</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-menu3"></i> <span>Navbars</span></a>
									<ul>
										<li><a href="navbar_single.html">Single navbar</a></li>
										<li>
											<a href="#">Multiple navbars</a>
											<ul>
												<li><a href="navbar_multiple_navbar_navbar.html">Navbar + navbar</a></li>
												<li><a href="navbar_multiple_navbar_header.html">Navbar + header</a></li>
												<li><a href="navbar_multiple_header_navbar.html">Header + navbar</a></li>
												<li><a href="navbar_multiple_top_bottom.html">Top + bottom</a></li>
											</ul>
										</li>
										<li><a href="navbar_colors.html">Color options</a></li>
										<li><a href="navbar_sizes.html">Sizing options</a></li>
										<li><a href="navbar_hideable.html">Hide on scroll</a></li>
										<li><a href="navbar_components.html">Navbar components</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-tree5"></i> <span>Menu levels</span></a>
									<ul>
										<li><a href="#"><i class="icon-IE"></i> Second level</a></li>
										<li>
											<a href="#"><i class="icon-firefox"></i> Second level with child</a>
											<ul>
												<li><a href="#"><i class="icon-android"></i> Third level</a></li>
												<li>
													<a href="#"><i class="icon-apple2"></i> Third level with child</a>
													<ul>
														<li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
														<li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="icon-windows"></i> Third level</a></li>
											</ul>
										</li>
										<li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
									</ul>
								</li>
								<!-- /layout -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Invoices</span> - Templates</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="home.blade.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="blank.blade.php">Invoices</a></li>
							<li class="active">Templates</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


					<!-- Footer -->
					@stop