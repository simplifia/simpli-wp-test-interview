import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	InspectorControls,
	RichText
} from '@wordpress/block-editor';
import {
	PanelBody,
	ColorPicker
} from '@wordpress/components';
import './editor.scss'; // Styles de l'éditeur si tu veux

export default function Edit({ attributes, setAttributes }) {
	const { text, backgroundColor, borderColor } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Block Settings', 'mission-block')}>
					<p>{__('Background Color', 'mission-block')}</p>
					<ColorPicker
						color={backgroundColor}
						onChangeComplete={(value) => setAttributes({ backgroundColor: value.hex })}
						disableAlpha
					/>
					<p>{__('Border Color', 'mission-block')}</p>
					<ColorPicker
						color={borderColor}
						onChangeComplete={(value) => setAttributes({ borderColor: value.hex })}
						disableAlpha
					/>
				</PanelBody>
			</InspectorControls>

			<div
				{...useBlockProps({
					style: {
						backgroundColor,
						border: `2px solid ${borderColor}`,
						padding: '10px',
					},
				})}
			>
				<RichText
					tagName="p"
					value={text}
					onChange={(value) => setAttributes({ text: value })}
					placeholder={__('Enter text here...', 'mission-block')}
				/>
			</div>
		</>
	);
}
