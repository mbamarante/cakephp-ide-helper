<?php

namespace IdeHelper\Annotator\Template;

use Exception;
use PhpParser\ParserFactory;
use Throwable;

/**
 * Extracts variables from CakePHP php/ctp templates using AST.
 */
class EnhancedVariableExtractor {

	/**
	 * @param string $content
	 * @return array
	 */
	public function extract($content) {
		$vars = $this->collect($content);

		return $result;
	}

	/**
	 * @param string $content
	 *
	 * @return array
	 */
	protected function collect($content) {
		$parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
		try {
			$ast = $parser->parse($content);
		} catch (Exception $exception) {
			return [];
		} catch (Throwable $exception) {
			return [];
		}

		dd($ast);

		return $vars;
	}

}
