import { registerBlockType } from '@wordpress/blocks';
import metadata from './block.json'

registerBlockType( metadata.name, {
    title: metadata.title,
    icon: metadata.icon,
    category: metadata.category,
    edit: () => <div>Edit: Hola, mundo!</div>,
    save: () => <div>Frontend: Hola, mundo!</div>,
} );