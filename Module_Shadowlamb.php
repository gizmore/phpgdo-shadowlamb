<?php
namespace GDO\Shadowlamb;

use GDO\Core\GDO_Module;

/**
 * A website for the shadowlamb IRC MMO RPG.
 *
 * @version 7.0.2
 * @author gizmore
 */
final class Module_Shadowlamb extends GDO_Module
{

	public int $priority = 100;

	public function isSiteModule(): bool
	{
		return true;
	}

}
