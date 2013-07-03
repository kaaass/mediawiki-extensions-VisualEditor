<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>MediaWiki VisualEditor Tests</title>

		<!-- Load test framework -->
		<link rel="stylesheet" href="../../qunit/qunit.css">
		<script src="../../qunit/qunit.js"></script>

		<!-- Generated by maintenance/makeStaticLoader.php -->
		<!-- ext.visualEditor.base#standalone-init -->
		<script>
			if (
				document.createElementNS &&
				document.createElementNS( 'http://www.w3.org/2000/svg', 'svg' ).createSVGRect
			) {
				document.write(
					'<link rel="stylesheet" ' +
						'href="../ui/styles/ve.ui.Icons-vector.css">'
				);
			} else {
				document.write(
					'<link rel="stylesheet" ' +
						'href="../ui/styles/ve.ui.Icons-raster.css">'
				);
			}
		</script>

	</head>
	<body>
		<!-- Generated by maintenance/makeStaticLoader.php -->
		<!-- Dependencies -->
		<script src="../../jquery/jquery.js"></script>
		<script src="../../jquery/jquery.client.js"></script>
		<script src="../../oojs/oo.js"></script>
		<script src="../../rangy/rangy-core-1.3.js"></script>
		<script src="../../rangy/rangy-position-1.3.js"></script>
		<script src="../../unicodejs/unicodejs.js"></script>
		<script src="../../unicodejs/unicodejs.textstring.js"></script>
		<script src="../../unicodejs/unicodejs.graphemebreakproperties.js"></script>
		<script src="../../unicodejs/unicodejs.graphemebreak.js"></script>
		<script src="../../unicodejs/unicodejs.wordbreakproperties.js"></script>
		<script src="../../unicodejs/unicodejs.wordbreak.js"></script>
		<!-- ext.visualEditor.base#standalone-init -->
		<script src="../../ve/ve.js"></script>
		<script src="../../ve/ve.EventEmitter.js"></script>
		<script src="../../ve/init/ve.init.js"></script>
		<script src="../../ve/init/ve.init.Platform.js"></script>
		<script src="../../ve/init/ve.init.Target.js"></script>
		<script src="../../ve/init/sa/ve.init.sa.js"></script>
		<script src="../../ve/init/sa/ve.init.sa.Platform.js"></script>
		<script src="../../ve/init/sa/ve.init.sa.Target.js"></script>
		<script src="../../ve/ve.debug.js"></script>
		<script>
			<?php
				require '../../../VisualEditor.i18n.php';
				echo 've.init.platform.addMessages( ' . json_encode( $messages['en'] ) . " );\n";
			?>
			ve.init.platform.setModulesUrl( '../..' );
		</script>
		<!-- ext.visualEditor.core -->
		<script src="../../ve/ve.Registry.js"></script>
		<script src="../../ve/ve.Factory.js"></script>
		<script src="../../ve/ve.Range.js"></script>
		<script src="../../ve/ve.Node.js"></script>
		<script src="../../ve/ve.NamedClassFactory.js"></script>
		<script src="../../ve/ve.BranchNode.js"></script>
		<script src="../../ve/ve.LeafNode.js"></script>
		<script src="../../ve/ve.Element.js"></script>
		<script src="../../ve/ve.Document.js"></script>
		<script src="../../ve/dm/ve.dm.js"></script>
		<script src="../../ve/dm/ve.dm.Model.js"></script>
		<script src="../../ve/dm/ve.dm.ModelRegistry.js"></script>
		<script src="../../ve/dm/ve.dm.NodeFactory.js"></script>
		<script src="../../ve/dm/ve.dm.AnnotationFactory.js"></script>
		<script src="../../ve/dm/ve.dm.AnnotationSet.js"></script>
		<script src="../../ve/dm/ve.dm.MetaItemFactory.js"></script>
		<script src="../../ve/dm/ve.dm.Node.js"></script>
		<script src="../../ve/dm/ve.dm.BranchNode.js"></script>
		<script src="../../ve/dm/ve.dm.LeafNode.js"></script>
		<script src="../../ve/dm/ve.dm.Annotation.js"></script>
		<script src="../../ve/dm/ve.dm.InternalList.js"></script>
		<script src="../../ve/dm/ve.dm.MetaItem.js"></script>
		<script src="../../ve/dm/ve.dm.MetaList.js"></script>
		<script src="../../ve/dm/ve.dm.TransactionProcessor.js"></script>
		<script src="../../ve/dm/ve.dm.Transaction.js"></script>
		<script src="../../ve/dm/ve.dm.Surface.js"></script>
		<script src="../../ve/dm/ve.dm.SurfaceFragment.js"></script>
		<script src="../../ve/dm/ve.dm.DataString.js"></script>
		<script src="../../ve/dm/ve.dm.Document.js"></script>
		<script src="../../ve/dm/ve.dm.LinearData.js"></script>
		<script src="../../ve/dm/ve.dm.DocumentSlice.js"></script>
		<script src="../../ve/dm/ve.dm.DocumentSynchronizer.js"></script>
		<script src="../../ve/dm/ve.dm.IndexValueStore.js"></script>
		<script src="../../ve/dm/ve.dm.Converter.js"></script>
		<script src="../../ve/dm/lineardata/ve.dm.ElementLinearData.js"></script>
		<script src="../../ve/dm/lineardata/ve.dm.MetaLinearData.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.GeneratedContentNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.AlienNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.BreakNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.CenterNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.DefinitionListItemNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.DefinitionListNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.DivNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.DocumentNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.HeadingNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.ImageNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.InternalItemNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.InternalListNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.ListItemNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.ListNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.ParagraphNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.PreformattedNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.TableCaptionNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.TableCellNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.TableNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.TableRowNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.TableSectionNode.js"></script>
		<script src="../../ve/dm/nodes/ve.dm.TextNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWEntityNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWHeadingNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWPreformattedNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWInlineImageNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWBlockImageNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWImageCaptionNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWTransclusionNode.js"></script>
		<script src="../../ve/dm/annotations/ve.dm.LinkAnnotation.js"></script>
		<script src="../../ve-mw/dm/annotations/ve.dm.MWExternalLinkAnnotation.js"></script>
		<script src="../../ve-mw/dm/annotations/ve.dm.MWInternalLinkAnnotation.js"></script>
		<script src="../../ve/dm/annotations/ve.dm.TextStyleAnnotation.js"></script>
		<script src="../../ve/dm/metaitems/ve.dm.AlienMetaItem.js"></script>
		<script src="../../ve-mw/dm/metaitems/ve.dm.MWAlienMetaItem.js"></script>
		<script src="../../ve-mw/dm/metaitems/ve.dm.MWCategoryMetaItem.js"></script>
		<script src="../../ve-mw/dm/metaitems/ve.dm.MWDefaultSortMetaItem.js"></script>
		<script src="../../ve-mw/dm/metaitems/ve.dm.MWLanguageMetaItem.js"></script>
		<script src="../../ve-mw/dm/models/ve.dm.MWTransclusionModel.js"></script>
		<script src="../../ve-mw/dm/models/ve.dm.MWTransclusionPartModel.js"></script>
		<script src="../../ve-mw/dm/models/ve.dm.MWTransclusionContentModel.js"></script>
		<script src="../../ve-mw/dm/models/ve.dm.MWTemplateSpecModel.js"></script>
		<script src="../../ve-mw/dm/models/ve.dm.MWTemplateModel.js"></script>
		<script src="../../ve-mw/dm/models/ve.dm.MWTemplatePlaceholderModel.js"></script>
		<script src="../../ve-mw/dm/models/ve.dm.MWTemplateParameterModel.js"></script>
		<script src="../../ve/ce/ve.ce.js"></script>
		<script src="../../ve/ce/ve.ce.DomRange.js"></script>
		<script src="../../ve/ce/ve.ce.AnnotationFactory.js"></script>
		<script src="../../ve/ce/ve.ce.NodeFactory.js"></script>
		<script src="../../ve/ce/ve.ce.Document.js"></script>
		<script src="../../ve/ce/ve.ce.View.js"></script>
		<script src="../../ve/ce/ve.ce.Annotation.js"></script>
		<script src="../../ve/ce/ve.ce.Node.js"></script>
		<script src="../../ve/ce/ve.ce.BranchNode.js"></script>
		<script src="../../ve/ce/ve.ce.ContentBranchNode.js"></script>
		<script src="../../ve/ce/ve.ce.LeafNode.js"></script>
		<script src="../../ve/ce/ve.ce.ProtectedNode.js"></script>
		<script src="../../ve/ce/ve.ce.FocusableNode.js"></script>
		<script src="../../ve/ce/ve.ce.RelocatableNode.js"></script>
		<script src="../../ve/ce/ve.ce.ResizableNode.js"></script>
		<script src="../../ve/ce/ve.ce.Surface.js"></script>
		<script src="../../ve/ce/ve.ce.SurfaceObserver.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.GeneratedContentNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.AlienNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.BreakNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.CenterNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.DefinitionListItemNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.DefinitionListNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.DivNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.DocumentNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.HeadingNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.ImageNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.InternalItemNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.InternalListNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.ListItemNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.ListNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.ParagraphNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.PreformattedNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.TableCaptionNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.TableCellNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.TableNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.TableRowNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.TableSectionNode.js"></script>
		<script src="../../ve/ce/nodes/ve.ce.TextNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWEntityNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWHeadingNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWPreformattedNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWInlineImageNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWBlockImageNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWImageCaptionNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWTransclusionNode.js"></script>
		<script src="../../ve/ce/annotations/ve.ce.LinkAnnotation.js"></script>
		<script src="../../ve-mw/ce/annotations/ve.ce.MWExternalLinkAnnotation.js"></script>
		<script src="../../ve-mw/ce/annotations/ve.ce.MWInternalLinkAnnotation.js"></script>
		<script src="../../ve/ce/annotations/ve.ce.TextStyleAnnotation.js"></script>
		<script src="../../ve/ui/ve.ui.js"></script>
		<script src="../../ve/ui/ve.ui.Surface.js"></script>
		<script src="../../ve/ui/ve.ui.Context.js"></script>
		<script src="../../ve/ui/ve.ui.Frame.js"></script>
		<script src="../../ve/ui/ve.ui.Window.js"></script>
		<script src="../../ve/ui/ve.ui.WindowSet.js"></script>
		<script src="../../ve/ui/ve.ui.Inspector.js"></script>
		<script src="../../ve/ui/ve.ui.InspectorFactory.js"></script>
		<script src="../../ve/ui/ve.ui.Dialog.js"></script>
		<script src="../../ve-mw/ui/ve.ui.MWDialog.js"></script>
		<script src="../../ve/ui/ve.ui.DialogFactory.js"></script>
		<script src="../../ve/ui/ve.ui.Layout.js"></script>
		<script src="../../ve/ui/ve.ui.Widget.js"></script>
		<script src="../../ve/ui/ve.ui.Tool.js"></script>
		<script src="../../ve/ui/ve.ui.ToolFactory.js"></script>
		<script src="../../ve/ui/ve.ui.Toolbar.js"></script>
		<script src="../../ve/ui/ve.ui.CommandRegistry.js"></script>
		<script src="../../ve/ui/ve.ui.Trigger.js"></script>
		<script src="../../ve/ui/ve.ui.TriggerRegistry.js"></script>
		<script src="../../ve/ui/ve.ui.Action.js"></script>
		<script src="../../ve/ui/ve.ui.ActionFactory.js"></script>
		<script src="../../ve/ui/actions/ve.ui.AnnotationAction.js"></script>
		<script src="../../ve/ui/actions/ve.ui.ContentAction.js"></script>
		<script src="../../ve/ui/actions/ve.ui.FormatAction.js"></script>
		<script src="../../ve/ui/actions/ve.ui.HistoryAction.js"></script>
		<script src="../../ve/ui/actions/ve.ui.IndentationAction.js"></script>
		<script src="../../ve/ui/actions/ve.ui.InspectorAction.js"></script>
		<script src="../../ve/ui/actions/ve.ui.ListAction.js"></script>
		<script src="../../ve/ui/elements/ve.ui.LabeledElement.js"></script>
		<script src="../../ve/ui/elements/ve.ui.GroupElement.js"></script>
		<script src="../../ve/ui/elements/ve.ui.FlaggableElement.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.PopupWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.SelectWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.OptionWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.SearchWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.ButtonWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.IconButtonWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.InputWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.InputLabelWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.TextInputWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.OutlineItemWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.OutlineWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.OutlineControlsWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.MenuItemWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.MenuSectionItemWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.MenuWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.LookupInputWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.TextInputMenuWidget.js"></script>
		<script src="../../ve/ui/widgets/ve.ui.LinkTargetInputWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWLinkTargetInputWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWCategoryInputWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWCategoryPopupWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWCategoryItemWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWCategoryWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWMediaSearchWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWMediaResultWidget.js"></script>
		<script src="../../ve-mw/ui/widgets/ve.ui.MWTitleInputWidget.js"></script>
		<script src="../../ve/ui/layouts/ve.ui.FieldsetLayout.js"></script>
		<script src="../../ve/ui/layouts/ve.ui.GridLayout.js"></script>
		<script src="../../ve/ui/layouts/ve.ui.PanelLayout.js"></script>
		<script src="../../ve/ui/layouts/ve.ui.StackPanelLayout.js"></script>
		<script src="../../ve/ui/dialogs/ve.ui.PagedDialog.js"></script>
		<script src="../../ve-mw/ui/dialogs/ve.ui.MWMetaDialog.js"></script>
		<script src="../../ve-mw/ui/dialogs/ve.ui.MWMediaInsertDialog.js"></script>
		<script src="../../ve-mw/ui/dialogs/ve.ui.MWMediaEditDialog.js"></script>
		<script src="../../ve-mw/ui/dialogs/ve.ui.MWTransclusionDialog.js"></script>
		<script src="../../ve/ui/tools/ve.ui.ButtonTool.js"></script>
		<script src="../../ve/ui/tools/ve.ui.AnnotationButtonTool.js"></script>
		<script src="../../ve/ui/tools/ve.ui.DialogButtonTool.js"></script>
		<script src="../../ve/ui/tools/ve.ui.InspectorButtonTool.js"></script>
		<script src="../../ve/ui/tools/ve.ui.IndentationButtonTool.js"></script>
		<script src="../../ve/ui/tools/ve.ui.ListButtonTool.js"></script>
		<script src="../../ve/ui/tools/ve.ui.DropdownTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.BoldButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.ItalicButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.ClearButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.LinkButtonTool.js"></script>
		<script src="../../ve-mw/ui/tools/buttons/ve.ui.MWLinkButtonTool.js"></script>
		<script src="../../ve-mw/ui/tools/buttons/ve.ui.MWMediaInsertButtonTool.js"></script>
		<script src="../../ve-mw/ui/tools/buttons/ve.ui.MWMediaEditButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.BulletButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.NumberButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.IndentButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.OutdentButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.RedoButtonTool.js"></script>
		<script src="../../ve/ui/tools/buttons/ve.ui.UndoButtonTool.js"></script>
		<script src="../../ve-mw/ui/tools/buttons/ve.ui.MWTransclusionButtonTool.js"></script>
		<script src="../../ve/ui/tools/dropdowns/ve.ui.FormatDropdownTool.js"></script>
		<script src="../../ve-mw/ui/tools/dropdowns/ve.ui.MWFormatDropdownTool.js"></script>
		<script src="../../ve/ui/inspectors/ve.ui.AnnotationInspector.js"></script>
		<script src="../../ve/ui/inspectors/ve.ui.LinkInspector.js"></script>
		<script src="../../ve-mw/ui/inspectors/ve.ui.MWLinkInspector.js"></script>
		<!-- ext.visualEditor.experimental -->
		<script src="../../ve-mw/dm/nodes/ve.dm.MWReferenceListNode.js"></script>
		<script src="../../ve-mw/dm/nodes/ve.dm.MWReferenceNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWReferenceListNode.js"></script>
		<script src="../../ve-mw/ce/nodes/ve.ce.MWReferenceNode.js"></script>
		<script src="../../ve-mw/ui/tools/buttons/ve.ui.MWReferenceEditButtonTool.js"></script>
		<script src="../../ve-mw/ui/dialogs/ve.ui.MWReferenceEditDialog.js"></script>

		<!-- Load plugins for test framework -->
		<script src="../../ve/test/ve.qunit.js"></script>

		<!-- Load test suites -->
		<script src="../../ve/test/ve.test.utils.js"></script>
		<script src="../../ve/test/dm/ve.dm.example.js"></script>
		<script src="dm/ve.dm.mwExample.js"></script>
		<script src="dm/ve.dm.MWConverter.test.js"></script>
		<script src="dm/ve.dm.InternalList.test.js"></script>
		<script src="dm/ve.dm.SurfaceFragment.test.js"></script>
		<script src="dm/nodes/ve.dm.MWTransclusionNode.test.js"></script>
		<script src="ce/ve.ce.ContentBranchNode.test.js"></script>
		<script src="ce/ve.ce.Document.test.js"></script>
		<script src="ui/actions/ve.ui.FormatAction.test.js"></script>
		<!-- ve.init.mw.ViewPageTarget can't be tested here because it depends on window.mw
		<script src="init/targets/ve.init.mw.ViewPageTarget.test.js"> -->
		<div id="qunit"></div>
		<div id="qunit-fixture">test markup</div>
	</body>
</html>
