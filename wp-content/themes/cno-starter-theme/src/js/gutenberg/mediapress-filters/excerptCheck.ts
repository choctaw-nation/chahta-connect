import { select } from '@wordpress/data';
import { store as editorStore } from '@wordpress/editor';
import type { ChecklistItem } from './types';

/**
 * Checks if the excerpt is valid
 * @param item
 */
export default function excerptCheck( item: ChecklistItem ): ChecklistItem {
	if ( item.name !== 'excerpt_is_valid' ) {
		return item;
	}
	const isCurrentPostPending = select( editorStore ).isCurrentPostPending();
	const status = isCurrentPostPending ? 'NONBLOCKING' : 'BLOCKING';
	const excerpt = select( editorStore ).getEditedPostAttribute( 'excerpt' );
	if ( ! excerpt || excerpt.length === 0 ) {
		return {
			...item,
			status,
			message: 'Please provide a valid excerpt for the post.',
		};
	}
	if ( excerpt.length > 160 ) {
		return {
			...item,
			status,
			message: 'Excerpt must be 160 characters or less.',
		};
	}

	return {
		...item,
		status: 'COMPLETED',
		message: 'A valid excerpt is provided.',
	};
}
